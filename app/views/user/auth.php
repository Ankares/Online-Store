<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авторизация</title>
  <meta name="description" content="Авторизация">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Authorization -->
  <div class="container main">
    <h1>Авторизация</h1>   <br>
    <p>Здесь вы можете авторизоваться на сайте</p>
    <form action="/user/auth" method="post" class="form-control">
        <input type="email" name="email" placeholder="Введите почту" value="<?=$_POST['email']?>"><br>
        <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
        
        <div class="error"><?=$data['message']?></div> <br>
        <button class="btn" id="send">Авторизация</button>
    </form>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
