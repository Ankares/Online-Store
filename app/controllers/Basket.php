<?php

  class Basket extends Controller {
    public function index() {
      // Basket for products
      $data = [];
      $session = $this->model('BasketModel');

      if(isset($_POST['itemDelete']))
        $data['dellOneItem'] = $session->deleteOneFromSession($_POST['itemDelete']);

      if(isset($_POST['itemsDeleteAll']))
        $data['dellAllItems'] = $session->deleteSession();

      if(isset($_POST['item_id']))
        $session->addToSession($_POST['item_id']); 

      if(!$session->isSetSession())
        $data['empty'] = 'Пустая корзина';

      else {
        $products = $this->model('Products'); 
        $data['products'] = $products->getProductsSession($session->getSession());
      }

      $this->view('basket/index', $data);
    }
  }
