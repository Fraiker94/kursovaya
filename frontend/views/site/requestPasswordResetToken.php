<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Восстановление пароля';
?>
<div class="site-request-password-reset">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8 border border-warning login shadow-lg p-3 mb-5 bg-white">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Пожалуйста введите емейл на которй придет ссылка на восстановление пароля.</p>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn my-btn']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</div>
