<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Usuario';

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<body>
    
<div class="padre">

    <div class="divs" id="izquierda">
    <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'class' => 'nombre_clase',
            'layout' => 'horizontal',
            'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>
        
           <div class="form-div">
                <p class="a">Solicitud de nuevo</p>
                <h1 class="negrita">REGISTRO</h1>
                <br>
                    
                <div class="inputs">
                        <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="" placeholder="Nombre de comercio o la empresa" aria-required="true" aria-invalid="true">
                        <br>
                        <br>
                        <input type="text" id="loginform-password" class="form-control" name="LoginForm[password]" value="" placeholder="Escriba un correo válido" aria-required="true">
                        <br>            
                        <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="" ><label for="loginform-rememberme" style="color:blue">CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD.</label>
                        <br>
                    </div>

                    <div class="boton-login">
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <!-- /*Html::submitButton('Iniciar sesión', ['class' => 'btn btn-success', 'name' => 'login-button']) */ -->
                                <br>
                                <button class='btn btn-success btn-block' name='login-button'>Iniciar registro</button>
                            </div>
                        </div>
                    </div>
                    
                    <p>Para consultar nuestro aviso de privacidad,<br><a href="#" >Da click aquí</a></p>

            </div>        

        <?php ActiveForm::end(); ?>
        <!--
        <form action="/basic/web/index.php?r=site%2Fexitoso" method="post">
        -->        
        <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">


    </div>

    <div class="divs" id="derecha">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'class' => 'nombre_clase',
            'layout' => 'horizontal',
            'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>
        
           <div class="form-div">
                <p class="a">Cuento con usuario y contraseña</p>
                <h1 class="negrita">USUARIO</h1>
                <br>
                    
                <div class="inputs">
                        <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="" placeholder="Usuario" aria-required="true" aria-invalid="true">
                        <br>
                        <br>
                        <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" value="" placeholder="Contraseña" aria-required="true">
                        <br>            
                        <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="0" checked="" ><label for="loginform-rememberme">CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD.</label>
                        <br>
                        <div class="col-lg-8"><p class="help-block help-block-error "></p></div>
                    </div>

                    <div class="boton-login">
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <!-- /*Html::submitButton('Iniciar sesión', ['class' => 'btn btn-success', 'name' => 'login-button']) */ -->
                                <br>
                                <button class='btn btn-success btn-block' name='login-button'>Actualizar Solicitud</button>
                            </div>
                        </div>
                    </div>
                    
                    <p>¿Olvidaste tu contraseña?<br>Contáctanos: <a href="tel:+527717176000"> (771) 71 76000</a></p>

            </div>        

        <?php ActiveForm::end(); ?>
    </div>

</div>
</body>