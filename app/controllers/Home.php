<?php

    class Home extends Controller{
        // Main page
        public function index(){
          $products = $this->model('Products'); 

            $this->view('home/index', $products->getProductsLimited("id",5));
        }
    }
