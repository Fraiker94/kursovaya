<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

$this->registerJs(
  "function openbox(id) {
  var all = document.querySelectorAll(\".product-window\");
  for (var i = 0; i < all.length; i++) {
    if (all[i].id == id) {
      all[i].style.display = (all[i].style.display == 'none')? 'block' : 'none';
    } else {
      all[i].style.display = 'none';
    }
  }
}", View::POS_HEAD
);

$this->title = 'Каталог товаров';
?>
<div class="site-signup">
  <div class="row">
    <div class="col-lg-3">
      <br/>
        <p class="product"><a href="#!" onclick="openbox('box1')" class="products-link">Мёд</a></p>
      <br/>
        <p class="product"><a href="#!" onclick="openbox('box2')" class="products-link">Семена медоносных культур</a></p>
      <br/>
        <p class="product"><a href="#!" onclick="openbox('box3')" class="products-link">Прополис</a></p>
      <br/>
        <p class="product"><a href="#!" onclick="openbox('box4')" class="products-link">Побочные продукты</a></p>
    </div>
    <div class="col-lg-4">
        <div class="product-window" id="box1">
            <p class="text-centered">
                <img class="products-img" src="/images/honeyjar.png">
            </p>
            <p class="product-text">Мёд разнотравье, 3л</p>
            <p class="product-text2">1799 руб.</p>
            <p class="product-cart">
            <input type="number" id="tentacles" class="product-input" name="tentacles" min="1" max="100" placeholder="Кол-во">
            <button type="submit"
                    class="btn btn-warning">
                <i class="fa fa-shopping-cart"></i>Добавить в корзину</button>
            </p>
        </div>
        <div class="product-window" id="box2" style="display: none;">
            <p class="text-centered">
                <img class="products-img2" src="/images/seed.png">
            </p>
            <p class="product-text">Семена фацелии, 1кг</p>
            <p class="product-text2">249.руб</p>
            <p class="product-cart">
                <input type="number" id="tentacles" class="product-input" name="tentacles" min="1" max="100" placeholder="Кол-во">
                <button type="submit"
                        class="btn btn-warning">
                    <i class="fa fa-shopping-cart"></i>Добавить в корзину</button>
            </p>
        </div>
        <div class="product-window" id="box3" style="display: none;">
            <p class="text-centered">
                <img class="products-img" src="/images/pngwing.png">
            </p>
            <p class="product-text">Прополис, 50г</p>
            <p class="product-text2">500 руб.</p>
            <p class="product-cart">
                <input type="number" id="tentacles" class="product-input" name="tentacles" min="1" max="100" placeholder="Кол-во">
                <button type="submit"
                        class="btn btn-warning">
                    <i class="fa fa-shopping-cart"></i>Добавить в корзину</button>
            </p>
        </div>
        <div class="product-window" id="box4" style="display: none;">
            <p class="text-centered">
                <img class="products-img" src="/images/pngwing.png">
            </p>
            <p class="product-text">Помдор пчелинный, 50г</p>
            <p class="product-text2">300 руб.</p>
            <p class="product-cart">
                <input type="number" id="tentacles" class="product-input" name="tentacles" min="1" max="100" placeholder="Кол-во">
                <button type="submit"
                        class="btn btn-warning">
                    <i class="fa fa-shopping-cart"></i>Добавить в корзину</button>
            </p>
        </div>
    </div>
    <div class="col-lg-5">
    </div>
  </div>
</div>