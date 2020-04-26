<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login Usuarios';


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

    <h1 class="titulo">Registro de Usuarios</h1>
    
    <div class="padre">

        <div class="divs" id="izquierda">
            <br>
                <b><p class="a">Solicitud de nuevo</p></b>
                <h1 class="negrita">REGISTRO</h1></h1>
                <br>
                <br>
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fregistrousuario" onSubmit="return valid1()">
                <div class="inputs">
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="text" class="form-control" name="user" autofocus="" placeholder="Nombre de usuario" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    <br><br>
                    <input type="text" class="form-control" name="email" autofocus="" placeholder="Correo electrónico" aria-required="true" aria-invalid="true" required="true" autocomplete=" false">
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



    </div>
</body>