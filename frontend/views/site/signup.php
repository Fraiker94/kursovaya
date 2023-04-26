<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="site-signup">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 border border-warning login shadow-lg p-3 mb-5 bg-white">
            <h1><?= Html::encode($this->title) ?></h1>
            <br/>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Зарегестрироваться', ['class' => 'btn my-btn', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
