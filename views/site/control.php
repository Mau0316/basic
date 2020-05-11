<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro de Mesa de Control';
$user = $_POST['user'];
$correo = $_POST['email'];
$nom = "control";
$rol = "control";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script type = "text/javascript">

function mensaje(){
        var nombre = document.getElementById("nombre").value;
        var email = document.getElementById("email").value;        
        var rol = document.getElementById("rol").value;
        var nombre_tabla = document.getElementById("nombre_tabla").value;
        var password = document.getElementById("password").value;       
        var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var contra = /^([a-zA-Z0-9\.\-])+([a-zA-Z0-9])+$/;

        if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa dirección de correo electrónico!'           
            })
            return false;
        }

        else if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu nombre!'           
            })
            return false;
        }

        else if (!expr.test(email))
        {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Formato incorrecto de correo electrónico!'            
            })
            return false;
        }

        else if (password == null || password.length == 0 || /^\s+$/.test(password)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa una contraseña!'            
            })
            return false;
        }        

        else if(!contra.test(password)){
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Ingresar letras y números en contraseña!'            
            })
            return false;
        }  

            var parametros = {
                    "nombre" : nombre,
                    "email" : email,                    
                    "rol": rol,
                    "nombre_tabla" : nombre_tabla,
                    "password" : password,
                };

                $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/control') ?>',
                        type:  'post',
                        beforeSend: function () {
                        },
                        success:  function (response) {
                if (response){                                        
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados correctamente',
                        showClass: {
                            popup: 'animated fadeInDown faster'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp faster'
                        }
                        })
                        document.getElementById("nombre").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("rol").value = "";
                        document.getElementById("nombre_tabla").value = "";
                        document.getElementById("password").value = "";
                       
                }        
                else{                                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Ha ocurrido un error con el servidor',
                        showClass: {
                            popup: 'animated fadeInDown faster'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp faster'
                        }
                        })
                        return false;
                }
                
                        }//Cierre respuesta de procesa miento de datos
                });//Cierre funcion ajax

}

</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/control.css">  
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<body>
<h1 class="title">Registro de Mesa de control</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<div class="cuadro">                
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="hidden" name="rol" id="rol" value="<?php echo $rol;?>">
                    <input type="hidden" name="nombre_tabla" id="nombre_tabla" value="<?php echo $nom;?>">
                    <div class="datos1">
                        <p>NOMBRE</p>
                        <input type="text" class="form-control" id="nombre" autofocus="" placeholder="Nombre" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $user;?>">
                    </div>                    
                    
                    <div class="datos2">
                        <p>CORREO ELECTRÓNICO</p>
                        <input type="text" class="form-control" id="email" autofocus="" placeholder="Correo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $email;?>">
                    </div>
                    <div class="datos2">
                        <p>CONTRASEÑA</p>
                        <input type="password" class="form-control" id="password" autofocus="" placeholder="Contraseña" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>     
                                
                    <div class="boton">
                        <button type="button"  class='btn btn-success ' onClick="mensaje()" name='sendForm'>REGISTRATE</button><br>
                    </div>
            </div>
                
</div>

</body>