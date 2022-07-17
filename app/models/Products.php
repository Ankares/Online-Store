<?php
  require 'DB.php';
  class Products {

    // Actions with Products
    
    private $_db = null;            

    public function __construct() {
      $this->_db = DB::getInstence();  
    }
  
    public function countProducts() {
      $res = $this->_db->query("SELECT id FROM products");
      return count($res->fetchAll(PDO::FETCH_ASSOC));
    }
  
    public function getProducts() {
      $sql = $this->_db->query('SELECT * FROM products');
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  
    public function getProductsLimited($order,$limit) {
      $sql = $this->_db->query("SELECT * FROM products ORDER BY $order DESC LIMIT $limit");
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  
    public function getProductsCategory($category) {
      $sql = $this->_db->query("SELECT * FROM products WHERE category = '$category'");
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneProduct($id) {  
      $sql = $this->_db->query("SELECT * FROM products WHERE id = '$id'");
      return $sql->fetch(PDO::FETCH_ASSOC); 
    }

    public function getProductsSession($items) { 
      $sql = $this->_db->query("SELECT * FROM products WHERE id IN ($items)");
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  }
