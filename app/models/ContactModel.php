<?php
  class ContactModel {

    // Contact model (send mail)
    private $name;
    private $email;
    private $age;
    private $message;

    public function setData($name,$email,$age,$message) {
      $this->name = $name;
      $this->email = $email;
      $this->age = $age;
      $this->message = $message;
    }
    
    public function validForm() {
      if(strlen($this->name) < 3)
        return 'Имя слишком короткое';
      else if (strlen($this->email) < 5)
        return 'Email слишком короткий';
      else if (!is_numeric($this->age) || $this->age <= 0)
        return 'Введите возраст';
      else if (strlen($this->message) < 10)
          return 'Сообщение слишком короткое';
      else
          return 'Всё введено верно';
    }

    public function mail() {
      $to = 'vasya-petrenko-99@mail.ru';
      $message = 'Имя:'. $this->name. '. Возраст:' . $this->age . '. Сообщение' . $this->message;
      $subject = '=?utf-8?B?'.base64_encode('Сообщение с сайта').'?=';
      $headers = "From: $this->email\r\nReply-to: $this->email\r\nContent-type: text/html; charset=utf-8\r\n";
      $success = mail($to, $subject, $message, $headers);

      if(!$success)
        return 'Сообщение не было отправлено!';
      else
        return true;
     }
  }
