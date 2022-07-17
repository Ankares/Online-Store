<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Страница о нас</title>
  <meta name="description" content="Страница о нас">
  <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'public/blocks/header.php' ?>

  <!-- About company -->
  <div class="container main">
    <h1>Про компанию</h1>  <br>
    <p>текст про компанию</p>   <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis voluptatibus voluptates, nesciunt doloribus illo? Obcaecati natus adipisci iste magni veritatis, neque aperiam, dicta voluptatem.</p>
    <br><br>
    <?=$data?>
  </div>

  <?php require_once 'public/blocks/footer.php' ?>
</body>
</html>
