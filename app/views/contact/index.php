<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Контакты</title>
  <meta name="description" content="Обратная связь">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Sending mail -->
  <div class="container main">
    <h1>Обратная связь</h1>   <br>
    <p>Напишите нам, если возникли вопросы</p>
    <form action="/contact" method="post" class="form-control">
        <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>"><br>
        <input type="email" name="email" placeholder="Введите почту" value="<?=$_POST['email']?>"><br>
        <input type="text" name="age" placeholder="Введите возраст" value="<?=$_POST['age']?>"><br>
        <textarea name="message" placeholder="Введите сообщение" value="<?=$_POST['message']?>"></textarea>  <br>
        
        <div class="error"><?=$data['message']?></div> <br>
        <button class="btn" id="send">Отправить</button> 
    </form>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
