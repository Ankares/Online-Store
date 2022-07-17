<?php

  class Product extends Controller{
    // Show product info
    public function index($id) { 
      $product = $this->model('Products');
      $this->view('product/index', $product->getOneProduct($id));
    }
  }
