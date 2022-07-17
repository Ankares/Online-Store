<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Регистрация</title>
  <meta name="description" content="Регистрация">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Registration -->
  <div class="container main">
    <h1>Регистрация</h1>   <br>
    <p>Здесь вы можете зарегистрироваться</p>

    <form action="/user/reg" method="post" class="form-control">
        <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>"><br>
        <input type="email" name="email" placeholder="Введите почту" value="<?=$_POST['email']?>"><br>
        <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
          <input type="password" name="re_pass" placeholder="Повторите пароль" value="<?=$_POST['re_pass']?>"><br>

        <div class="error"><?=$data['message']?></div> <br>
        <button class="btn" id="send">Регистрация</button>
    </form>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
