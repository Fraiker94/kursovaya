<?php

/** @var yii\web\View $this */
/** @var Exception $exception */
/** @var \yii\data\Pagination $pages */

use yii\helpers\Html;
use yii\bootstrap4\LinkPager;

$this->title = 'Заказы';
?>
<div class="site-orders">

    <h1 class="text-centered"><?= Html::encode($this->title) ?></h1>

    <?php
        echo LinkPager::widget([
          'pagination' => $pages,
        ]);
    ?>

    <table class="iksweb">
        <tbody>
        <tr>
            <td><input type="checkbox" value="">&nbsp;</td>
            <td>ID</td>
            <td>Фото</td>
            <td>Название</td>
            <td>Категория</td>
            <td>Артикул</td>
            <td>Себестоимость</td>
            <td>Цена</td>
            <td>Статус</td>
            <td>Остаток на складе</td>
        </tr>
        <tr>
            <td><input type="checkbox" value="">&nbsp;</td>
            <td>1</td>
            <td><img class="table-img" src="/images/pngwing.png"></td>
            <td><p class="table-text">Помдор пчелиный сушеный, 50г</p></td>
            <td><p class="table-text">Побочные продукты</p></td>
            <td>11111</td>
            <td>250</td>
            <td>300</td>
            <td><p class="status">Доступен</p></td>
            <td>5</td>
        </tr>
        <tr>
            <td><input type="checkbox" value="">&nbsp;</td>
            <td>2</td>
            <td><img class="table-img" src="/images/honeyjar.png"></td>
            <td><p class="table-text">Мёд разнотравье, 3л</p></td>
            <td><p class="table-text">Мёд</p></td>
            <td>11112</td>
            <td>1600</td>
            <td>1799</td>
            <td><p class="status">Доступен</p></td>
            <td>10</td>
        </tr>
        </tbody>
    </table>

</div>
