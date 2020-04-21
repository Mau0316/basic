<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
                    
        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'Placeholder'=>'Usuario'])->label("")?>

        <?= $form->field($model, 'password')->passwordInput(['Placeholder'=>'Contraseña']) ->label("") ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ])->label("CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD") ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <!-- /*Html::submitButton('Iniciar sesión', ['class' => 'btn btn-success', 'name' => 'login-button']) */ -->
                <button class='btn btn-success' name='login-button'>Iniciar Sesión</button>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <!--

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
    -->
</div>