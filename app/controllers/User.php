<?php

  class User extends Controller {
    public function reg() {

      // User (reg/auth/dashboard)
      $data=[];

        if(isset($_POST['name'])) {
          $user = $this->model('UserModel'); 
          $user->setData(     
            $_POST['name'],
            $_POST['email'],
            $_POST['pass'],
            $_POST['re_pass']);

          $isValid = $user->validForm();  
          if($isValid == 'Всё введено верно') 
            $user->addUser();                
          else
              $data['message'] = $isValid;  
        }
        $this->view('user/reg', $data);
    }

      public function dashboard() {
        $user = $this->model('UserModel');   
        $data['user'] = $user->getUser();   
        if(isset($_POST['exit_btn'])) {
          $user->logOut();      
          exit();
        }
        
        if(isset($_FILES['img'])) {
          $maxsize = 512000;
          if($_FILES['img']['name'] == '')
            $data['error'] = 'Вы не выбрали файл';
          else if(($_FILES['img']['size'] >= $maxsize) || ($_FILES['img']['size'] == 0))
            $data['error'] = 'Файл слишком большой. Максимум <b>500 кб</b>';
          else{
              move_uploaded_file($_FILES['img']['tmp_name'], __DIR__ .'/../../public/userimage/'. $_FILES['img']['name']);
              $user->addPhoto($_FILES['img']['name']);
          }
        }
        $this->view('user/dashboard', $data);   
      }

    public function auth() {
        $data = [];
        if(isset($_POST['email'])) {            
            $user = $this->model('UserModel'); 
            $data['message'] = $user->auth($_POST['email'],$_POST['pass']);
        }
        $this->view('user/auth', $data);
    }
  }
