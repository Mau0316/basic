<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Registro Mesa de Control';
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/login.css">


<body>

    <h1 class="titulo">Registro de Mesa de control</h1>
    
    <div class="padre">

        <div class="divs" id="izquierda">
            <br>
                <b><p class="a">Solicitud de nuevo</p></b>
                <h1 class="negrita">REGISTRO</h1></h1>
                <br>
                <br>
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fregistrocontrol">
                <div class="inputs">
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="text" class="form-control" name="user" autofocus="" placeholder="Nombre de usuario" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    <br><br>
                    <input type="text" class="form-control" name="email" autofocus="" placeholder="Correo electrónico" aria-required="true" aria-invalid="true" required="true" autocomplete=" false">
                    <br>
                    
                </div>
                <div class="boton-login">
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <!-- /*Html::submitButton('Iniciar sesión', ['class' => 'btn btn-success', 'name' => 'login-button']) */ --><br>                    
                            <button class='btn btn-primary btn-block' >Iniciar registro</button><br>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                
            </form>        
        </div>

        <div class="divs" id="derecha">
            
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'options' => [
                    'onsubmit' => ''
                ],
                'fieldConfig' => [
                'template' => "{label}\n<div>{input}</div>\n\n<div>{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <div class="form-div">

                <b><p class="a">Cuento con Usuario y contraseña</p></b>
                <h1 class="negrita">USUARIO</h1>
                <br>

                    <div class="inputs1">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'Placeholder'=>'Correo electrónico'])->label("")?>
                            <?= $form->field($model, 'password')->passwordInput(['Placeholder'=>'Contraseña']) ->label("") ?>
                    </div>

                    <div class="boton-login">
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">                                
                                <br><button  class='btn btn-primary btn-block' >Entrar</button>
                            </div>
                        </div>
                    </div>
                    <b>
            </div>
            
            <?php ActiveForm::end(); ?>
    </div>




    </div>
</body>