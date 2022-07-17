<?php
  require 'DB.php';

  class UserModel {

    // User functions
    
    private $name;
    private $email;
    private $pass;
    private $re_pass;

    private $_db = null;                

    public function __construct(){     
      $this->_db = DB::getInstence();
    }

    public function setData($name,$email,$pass,$re_pass) {
      $this->name = $name;
      $this->email = $email;
      $this->pass = $pass;
      $this->re_pass = $re_pass;
    }

    public function validForm() {
      if(strlen($this->name) < 3)
        return 'Имя слишком короткое';
      else if (strlen($this->email) < 5)
        return 'Email слишком короткий';
      else if (strlen($this->pass) < 3)
        return 'Пароль не менее 3 символов';
      else if ($this->pass != $this->re_pass)
          return 'Пароли не совпадают';
      else
          return 'Всё введено верно';
    }

    public function addUser() {
      $sql = 'INSERT INTO users(name,email,password) VALUES(:name,:email,:password)';
      $query = $this->_db->prepare($sql);
      $passHash = password_hash($this->pass, PASSWORD_DEFAULT);
      $query->execute(['name'=>$this->name, 'email'=>$this->email, 'password'=>$passHash]);
      $this->setAuth($this->email);
    }

    public function getUser() {
      $email = $_COOKIE['login']; 
      $sql = $this->_db->query("SELECT * FROM users WHERE email = '$email'");
      return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function logOut() {
      setcookie('login', $this->email, time() - 3600*24, '/');
      unset($_COOKIE['login']);
      header('Location: /user/auth');
    }

    public function auth($email,$pass) {
      $sql = $this->_db->query("SELECT * FROM users WHERE email = '$email'");
      $user = $sql->fetch(PDO::FETCH_ASSOC);

      if($user['email'] == '')   
        return 'Пользователь не существует';
      else if(password_verify($pass,$user['password'])) 
        $this->setAuth($email);
      else
        return 'Пароли не совпадают';
    }

    public function addPhoto($imageName) {
      $email = $_COOKIE['login'];
      $sql = 'UPDATE users SET image = :image WHERE email = :email';
      $query = $this->_db->prepare($sql);
      $query->execute(['image'=>$imageName,'email'=>$email]);
    }

    public function setAuth($email) {
      setcookie('login',$email,time() + 3600*24,'/');
      header ('Location: /user/dashboard');
    }
  }
