<header>
  
  <div class="container top-menu">
    <div class="nav">
      <a href="/home">Главная</a>
      <a href="/contact">Контакты</a>
      <a href="/contact/about">Про нас</a>
    </div>
    <div class="tel">
      <i class="fas fa-phone"></i> +7 (909) 101-00-98
    </div>
  </div>
  
  <div class="container middle">
    <div class="logo">
      <img src="/public/img/logo.svg" alt="logo">
      <span>Мы знаем об одежде всё!</span>
    </div>
    
    <div class="auth-checkout">

      <?php if($_COOKIE['login'] == ''): ?>
        <a href="/user/auth">
          <button class="btn auth"> Войти </button>
        </a>
        <a href="/user/reg">
          <button class="btn"> Регистрация </button>
        </a>
      
      <?php else: ?>
        <a href="/basket">
          <?php
            require_once 'app/models/BasketModel.php';
            $basketModel = new BasketModel;
           ?>
          <button class="btn basket">
            Корзина <b>(<?=$basketModel->countItems()?>)</b>
          </button>
        </a>
        <br>
        <a href="/user/dashboard">
          <button class="btn dashboard">Кабинет пользователя</button>
        </a>
      <?php endif; ?>

    </div>
  </div>
  
  <div class="container menu">
    <ul>
      <li><a href="/categories">Все товары</a></li>
      <li><a href="/categories/shoes">Обувь</a></li>
      <li><a href="/categories/hats">Кепки</a></li>
      <li><a href="/categories/shirts">Футболки</a></li>
      <li><a href="/categories/watches">Часы</a></li>
    </ul>
  </div>
</header>
