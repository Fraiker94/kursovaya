<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Вход';
?>
<div class="site-login">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 border border-warning login shadow-lg p-3 mb-5 bg-white">
            <br/>
            <h1 class="text-centered"><?= Html::encode($this->title) ?></h1>
            <br/>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->inline(true) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe', ['options' =>  ['class' => 'custom-checkbox']])->checkbox() ?>

                <div style="color:margin:1em 0">
                    <?= Html::a('Забыли пароль?', ['site/request-password-reset'], ['class' => 'my-font']) ?>
                </div>
                <div style="margin:1em 0">
                  <?= Html::a('Регистрация', ['site/signup'], ['class' => 'my-font']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Войти', ['class' => 'btn my-btn', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            <br/>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
