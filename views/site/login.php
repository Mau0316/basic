<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Usuario';

?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/style.css">


<body>

    <h1 class="titulo">Registro Unidades de Reparto</h1>
    
    <div class="padre">

        <div class="divs" id="izquierda">
            <br>
                <b><p class="a">Solicitud de nuevo</p></b>
                <h1 class="negrita">REGISTRO</h1></h1>
                <br>
                <br>
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fregistrorepartidor">
                <div class="inputs">
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="text" class="form-control" name="user" autofocus="" placeholder="Nombre del comercio o la empresa" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    <br><br>
                    <input type="text" class="form-control" name="pass" autofocus="" placeholder="Escriba un correo válido" aria-required="true" aria-invalid="true" required="true" autocomplete=" false">
                    <br>
                    <input type="checkbox" name="leer"><p><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></p>
                    
                </div>
                <div class="boton-login">
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <!-- /*Html::submitButton('Iniciar sesión', ['class' => 'btn btn-success', 'name' => 'login-button']) */ --><br>                    
                            <button class='btn btn-success btn-block' name='login-button'>Iniciar registro</button><br>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                <br>
                <p>Para consultar nuestro aviso de privacidad,<br><a href="#" >Da click aquí</a></p>
                <br>
            </form>        
        </div>


        <div class="divs" id="derecha">
            
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                    'template' => "{label}\n<div>{input}</div>\n\n<div>{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                <div class="form-div">

                    <b><p class="a">Cuento con usuario y contraseña</p></b>
                    <h1 class="negrita">USUARIO</h1>
                    <br>

                    <div class="inputs">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'Placeholder'=>'Usuario'])->label("")?>
                            <?= $form->field($model, 'password')->passwordInput(['Placeholder'=>'Contraseña']) ->label("") ?>
                            <input type="checkbox" name="leer"><p><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></p>
                        </div>

                        <div class="boton-login">
                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-11">                                
                                    <br><button class='btn btn-success btn-block' name='login-button'>Actualizar Solicitud</button>
                                </div>
                            </div>
                        </div>
                                
                        <p>¿Olvidaste tu contraseña?<br>Contáctanos: <a href="tel:+527717176000"> (771) 71 76000</a></p><br>                        
                </div>
                
                <?php ActiveForm::end(); ?>
        </div>

    </div>
</body>