<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Кабинет пользователя</title>
  <meta name="description" content="Кабинет пользователя">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Dashboard -->
  <div class="container main">
    <h1>Кабинет пользователя <?=$data['user']['name']?></h1>  <br>
    <div class="user-info">
      <p>Добро пожаловать, <b><?=$data['user']['name']?></b></p>

      <!-- User image -->
      <form action="/user/dashboard" method="post" enctype="multipart/form-data">
          <p><?=$data['error']?></p>
          <input type="file" name="img">
          <button type="submit" class="btn">Загрузить</button>
      </form>

        <?php if($data['user']['image'] != ''):  ?>
          <br><br>
          <img class="image" src="/public/userimage/<?=$data['user']['image']?>">
        <?php else:?>
          <br><br>
          <img class="image" src="/public/userimage/default.png">
        <?php endif; ?>

      <!-- Log out -->
      <form action="/user/dashboard" method="post" >
        <input type="hidden" name="exit_btn"> 
        <button type="submit" class="btn">Выйти</button>
      </form>

    </div>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
