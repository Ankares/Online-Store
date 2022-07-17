<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$data['title']?></title>
  <meta name="description" content="<?=$data['title']?>">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- Pagination -->
  <div class="container main">
    <h1><?=$data['title']?></h1>
    <div class="products">
      <?php for($i=0;$i<count($data['products']);$i++): ?>
      <div class="product">
        <div class="image">
            <img src="/public/img/<?=$data['products'][$i]['img']?>" alt="<?=$data['products'][$i]['title']?>">
        </div>
        <h3><?=$data['products'][$i]['title']?></h3>
        <p><?=$data['products'][$i]['text']?></p>
        <a href="/product/<?=$data['products'][$i]['id']?>">
          <button class="btn">Подробнее</button>
        </a>
      </div>
      <?php endfor; ?>
    </div>
  </div>
  <div class="container">
    <?php if($data['pages']>1): ?>
      <?php for($i=0;$i<$data['pages'];$i++): ?>
        <?php $url = $i == 0 ? '/categories' : '/categories/'.($i+1); ?>
        <a href="<?=$url?>"><button class="pagination"><?=($i+1)?></button></a>
      <?php endfor; ?>
    <?php endif; ?>
  </div>


  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
