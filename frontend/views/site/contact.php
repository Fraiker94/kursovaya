<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

$this->title = 'Контакты';
?>
<div class="site-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <p align="center">ООО “Мёд”</p>
                <p align="center">ИНН 111111111</p>
                <p align="center">ОКПО 11111111</p>
                <p align="center">Юридическй адрес:</p>
                <p align="center">г. Чебоксары ул. Привокзальная 1</p>
                <p align="center">Тел: +7 900 000 000</p>
            </div>
            <div class="col-lg-8">
              <?= \andrewdanilov\yandexmap\YandexMap::widget([
                'id'  => 'some-unique-dom-id', // optional, an ID applied to widget wrapper
                'apikey' => '', // optional, yandex map api key
                'center' => [
                  'latitude' => '56.113220',
                  'longitude' => '47.264275',
                ], // or in short 'center' => ['52.449837', '-1.930617']
                'zoom' => 16, // optional, default 12
                'points' => [
                  [
                    'id' => 'point-1',
                    'title' => 'Point 1 Caption',
                    'text' => 'Point 1 Text (html allowed)',
                    'color' => '#FFA07A',
                    'latitude' => '56.113220',
                    'longitude' => '47.264275',
                  ],
                ],
                //'pointsUrl' => '/points.json', // url used to get an array of points instead of manual setting the 'points' param
                'scroll' => true, // optional, zoom map by scrolling, default false
                'wrapperTag' => 'div', // optional, html tag to wrap the map, default 'div'
                'wrapperOptions' => [ // optional, attributes passed to \yii\helpers\Html::tag() method for constructing map wrapper
                  'class' => 'map-wrapper',
                  'style' => 'width:100%;height:400px;',
                ],
                // Javascript function name to handle clicks on placemarks.
                // Callback function can accept just one param - point ID string.
                'jsPointsClickCallback' => 'myCallback',
              ]) ?>
            </div>
        </div>
    </div>
</div>
