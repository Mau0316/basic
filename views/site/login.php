<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro Unidades de Reparto';


?>
<script type = "text/javascript">
function valid1() {
    //Validación de campo vacío
    if (document.getElementById("acepto_chk1").checked==false){
        alert("Debes aceptar los Términos y Condiciones de Registro");
        return false;
    }
    else{
        return true;
    }
}

function valid2() {
    var bandera = "0";
    if (document.getElementById("acepto_chk2").checked==false && bandera == "0"){
        alert("Debes aceptar los Términos y Condiciones de Login");
        bandera = "1";
        return false;
    }
    else{
        return true;
    }
}

</script>

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
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fregistrorepartidor" onSubmit="return valid1()">
                <div class="inputs">
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="text" class="form-control" name="user" autofocus="" placeholder="Nombre del comercio o la empresa" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    <br><br>
                    <input type="text" class="form-control" name="email" autofocus="" placeholder="Escriba un correo válido" aria-required="true" aria-invalid="true" required="true" autocomplete=" false">
                    <br>
                    <input type="checkbox" name="acepto_chk" id="acepto_chk1" value="1" />
                    <p><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></p>
                    
                </div>
                <div class="boton-login">
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <!-- /*Html::submitButton('Iniciar sesión', ['class' => 'btn btn-success', 'name' => 'login-button']) */ --><br>                    
                            <button class='btn btn-success btn-block' >Iniciar registro</button><br>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                <br><br><br>
                
                
                <b><p>Para consultar nuestro aviso de privacidad,<br><a href="#" >Da click aquí</a></p></b>
                <br>
            </form>        
        </div>


        <div class="divs" id="derecha">
            
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'options' => [
                        'onsubmit' => 'return valid2()'
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

                        <div class="inputs">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'Placeholder'=>'Correo electrónico'])->label("")?>
                                <?= $form->field($model, 'password')->passwordInput(['Placeholder'=>'Contraseña']) ->label("") ?>
                                <input type="checkbox" name="acepto_chk" id="acepto_chk2"  /><p><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></p>
                        </div>

                        <div class="boton-login">
                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-11">                                
                                    <br><button  class='btn btn-success btn-block' >Actualizar Solicitud</button>
                                </div>
                            </div>
                        </div>
                        <b>
                        <p>¿Olvidaste tu contraseña? Contáctanos: <br> <a href="tel:+527717176000"> +52 (771) 71 76000</a></p>
                        <a href="mailto:email@echoecho.com" target="blank">escudo@hidalgo.gob.mx</a>
                        <p>Dirección general de Promoción a <br> emprendedores y MIPyMES</p>
                        </b>
                </div>
                
                <?php ActiveForm::end(); ?>
        </div>

    </div>
</body>