<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Главная страница</title>
  <meta name="description" content="Главная страница интернет магазина">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Main page (all products) -->
  <div class="container main">
    <h1>Популярные товары</h1>
    <div class="products">
      <?php for($i=0;$i<count($data);$i++): ?>
      <div class="product">
        <div class="image">
            <img src="/public/img/<?=$data[$i]['img']?>" alt="<?=$data[$i]['title']?>">
        </div>
        <h3><?=$data[$i]['title']?></h3>
        <p><?=$data[$i]['text']?></p>
        <a href="/product/<?=$data[$i]['id']?>">
          <button class="btn">Подробнее</button>
        </a>
      </div>
      <?php endfor; ?>
    </div>
  </div>


  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
