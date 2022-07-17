<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Корзина товаров</title>
  <meta name="description" content="Корзина товаров">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/products.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Shopping basket -->
  <div class="container main">
    <h1>Корзина товаров</h1>
      <?php if(count($data['products']) == 0): ?>
        <p><?=$data['empty'] ?></p>
      <?php else: ?>

        <!-- Delete everything from the basket -->
        <form action="/basket" method="post">
          <input type="hidden" name="itemsDeleteAll" value="<?=$data['products']?>"> <br>
          <button type="submit" class="btn">
            <?=$data['dellAllItems']?>Удалить все товары
          </button>
        </form>

        <!-- Showing products -->
        <div class="products">
          <?php for($i=0;$i<count($data['products']);$i++):
            $sum += $data['products'][$i]['price']; 
          ?>
            <div class="row">
              <img src="/public/img/<?=$data['products'][$i]['img']?>" alt="<?=$data['products'][$i]['img']?>">
              <h4><?=$data['products'][$i]['title']?></h4>
              <span><?=$data['products'][$i]['price']?> рублей</span>

              <form action="/basket" method="post">
                <input type="hidden" name="itemDelete" value="<?=$data['products'][$i]['id']?>">
                <button type="submit" class="btn del">
                  <?=$data['dellOneItem']?>Удалить
                </button>
              </form>
              
            </div>
          <?php endfor; ?>
          <button class="btn buy">Купить за <b><?=$sum?></b> рублей</button>
        </div>
      <?php endif; ?>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
