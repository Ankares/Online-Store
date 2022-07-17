<?php

  require '../models/DB.php';

  $_db = DB::getInstence();

  $sql = 'INSERT INTO products(title, intro, text, img, price, category) VALUES(:title, :intro, :text, :img, :price, :category)';
  $query = $_db->prepare($sql);
  $query->execute([
  'title'=>'Новый продукт',
  'intro'=>'Крутой товар',
  'text'=> 'Описание товара',
  'img'=> 'shoes.jpg',
  'price'=>'1090',
  'category'=>'shoes']);
