<?php
  class Categories extends Controller {
    // Pagination
    public function index($page = 1) {  
      $per_page = 3;                    
      $item = $page == 1 ? 0 : ($page-1) * $per_page;
      $limit = $item.','.$per_page;
      $prod = $this->model('Products');
      $pagesForPagination = ceil($prod->countProducts()/$per_page);
      $data = [
        'products'=> $prod->getProductsLimited('id',$limit),
        'title'=> 'Все товары на сайте',
        'pages'=>$pagesForPagination
      ];
      $this->view('categories/index', $data);
    }

    public function shoes(){
      $prod = $this->model('Products');
      $data = ['products'=> $prod->getProductsCategory('shoes'),'title'=> 'Вся обувь']; 
      $this->view('categories/index', $data);
    }

    public function hats(){
      $prod = $this->model('Products');
      $data = ['products'=> $prod->getProductsCategory('hats'),'title'=> 'Все кепки'];
      $this->view('categories/index', $data);
    }

    public function shirts(){
      $prod = $this->model('Products');
      $data = ['products'=> $prod->getProductsCategory('shirts'),'title'=> 'Все футболки'];
      $this->view('categories/index', $data);
    }

    public function watches(){
      $prod = $this->model('Products');
      $data = ['products'=> $prod->getProductsCategory('watches'),'title'=> 'Все часы'];
      $this->view('categories/index', $data);
    }

  }
