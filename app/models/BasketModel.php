<?php
  session_start();

  class BasketModel {
    
    //Shopping basket (using session)

    private $session_name = 'session';

    public function isSetSession() {
      return isset($_SESSION[$this->session_name]);
    }

    public function deleteSession() {
        unset($_SESSION[$this->session_name]);
    }
    
    public function deleteOneFromSession($itemID) {
      $items = explode(",", $_SESSION[$this->session_name]);
      if(count($items) == 1) {   
        $this->deleteSession();
        return;                
      }

      $new_items = [];      
      foreach($items as $el) {   
        if($el != $itemID)     
          array_push($new_items,$el); 
      }
      $_SESSION[$this->session_name] = implode(",", $new_items); 
    }

    public function getSession() {
      return $_SESSION[$this->session_name];
    }

    public function addToSession($itemID) {
      if(!$this->isSetSession())                
        $_SESSION[$this->session_name] = $itemID; 
      else  {                               
        $items = explode(',', $_SESSION[$this->session_name]);
        $itemExist = false;
        foreach ($items as $el) {
          if($el == $itemID)
            $itemExist = true;
        }
        if(!$itemExist)
        $_SESSION[$this->session_name] = $_SESSION[$this->session_name].','.$itemID;    
      }
    }

    public function countItems() {
      if(!$this->isSetSession())       
        return 0;
      else {
        $items = explode(',', $_SESSION[$this->session_name]);
        return count($items);
      }
    }
  }
