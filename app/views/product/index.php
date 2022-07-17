<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$data['title']?></title>
  <meta name="description" content="<?=$data['intro']?>">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/product.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Info about product -->
  <div class="container main">
    <a href="/categories/<?=$data['category']?>"> Назад </a> <br><br>
    <h1><?=$data['title']?></h1>
    <div class="info">
      <div>
        <img src="/public/img/<?=$data['img']?>" alt="<?=$data['img']?>">
      </div>
      <div><br>
        <h4><?=$data['intro']?></h4> <br>
        <p><?=$data['text']?></p>
      </div>
      <div>

        <!-- Adding product to the basket -->
        <form action="/basket" method="post">
          <input type="hidden" name="item_id" value="<?=$data['id']?>">
          <button class="btn">Купить за <?=$data['price']?> рублей</button>
        </form>

      </div>
    </div>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
