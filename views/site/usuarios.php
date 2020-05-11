<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro de Usuarios';
$user = $_POST['user'];
$correo = $_POST['email'];
$nom = "usuarios";
$rol = "usuarios";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script type = "text/javascript">

function mensaje(){

    if (document.getElementById("acepto_chk").checked==true)
    {
        
        var email = document.getElementById("email").value;        
        var rol = document.getElementById("rol").value;
        var nombre_tabla = document.getElementById("nombre_tabla").value;
        var password = document.getElementById("password").value;
        var nombre = document.getElementById("nombre").value;
        var a_paterno = document.getElementById("a_paterno").value;
        var a_materno = document.getElementById("a_materno").value;
        var celular = document.getElementById("celular").value;
        var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var contra = /^([a-zA-Z0-9\.\-])+([a-zA-Z0-9])+$/;

        if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu nombre!'
            })
            return false;
        }

        else if (a_paterno == null || a_paterno.length == 0 || /^\s+$/.test(a_paterno)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu apellido paterno!'            
            })
            return false;
        }

        else if (a_materno == null || a_materno.length == 0 || /^\s+$/.test(a_materno)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu apellido materno!'            
            })
            return false;
        }

        else if (celular == null || celular.length == 0 || /^\s+$/.test(celular)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu celular!'            
            })
            return false;
        }

        else if (isNaN(celular)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa valores númericos en Celular de conductores!'            
            })
            return false;
        }

        else if( !(/^\d{10}$/.test(celular)) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa 10 dígitos en Celular de conductores!'            
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
        
        else if (email == null || email.length == 0 || /^\s+$/.test(email)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa una dirección de correo electrónico!'            
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

            var parametros = {
                    "email" : email,                    
                    "rol": rol,
                    "nombre_tabla" : nombre_tabla,
                    "password" : password,
                    "nombre" : nombre,
                    "a_paterno" : a_paterno,
                    "a_materno" : a_materno,
                    "celular" : celular
                };

                $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/usuarios') ?>',
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
                        document.getElementById("email").value = "";
                        document.getElementById("rol").value = "";
                        document.getElementById("nombre_tabla").value = "";
                        document.getElementById("password").value = "";
                        document.getElementById("nombre").value = "";
                        document.getElementById("a_paterno").value = "";
                        document.getElementById("a_materno").value = "";
                        document.getElementById("celular").value = "";
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
                else{
                Swal.fire('Debes aceptar términos y condiciones')
                return false;
            }

}

</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/usuarios.css">  
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<body>
<h1 class="title">Registro de Usuario</h1>
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
                    <div class="datos1">
                        <p>APELLIDO PATERNO</p>
                        <input type="text" class="form-control" id="a_paterno" autofocus="" placeholder="Apellido paterno" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>   
                    <div class="datos1">
                        <p>APELLIDO MATERNO</p>
                        <input type="text" class="form-control" id="a_materno" autofocus="" placeholder="Apellido materno" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>                                                                  
                    <br><br><br>                   
                    <div class="datos2">
                        <p>TELÉFONO CELULAR</p>
                        <input type="text" class="form-control" id="celular" autofocus="" placeholder="Número de teléfono" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    
                    <div class="datos2">
                        <p>CORREO ELECTRÓNICO</p>
                        <input type="text" class="form-control" id="email" autofocus="" placeholder="Correo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $email;?>">
                    </div>
                    <div class="datos2">
                        <p>CONTRASEÑA</p>
                        <input type="text" class="form-control" id="password" autofocus="" placeholder="Contraseña" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>     
<!--
                    <div class="datos3">
                        <p>DIRECCIÓN</p>
                        <input type="text" class="form-control" id="direccion" autofocus="" placeholder="Calle" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>NÚMERO</p>
                        <input type="text" class="form-control" id="numero" autofocus="" placeholder="No." aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>COLONIA</p>
                        <input type="text" class="form-control" id="colonia" autofocus="" placeholder="Colonia" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>MUNICIPIO</p>
                        <input type="text" class="form-control" id="municipio" autofocus="" placeholder="Municipio" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>CÓDIGO POSTAL</p>
                        <input type="text" class="form-control" id="c_postal" autofocus="" placeholder="c.p" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>REFERENCIAS DE DOMICILIO (color de vivienda, seña particular, entre calles, etc.)</p>
                        <input type="text" class="form-control" id="ref_domicilio" autofocus="" placeholder="(Color de vivienda, seña particular, entre calles, ect.)" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>
                    -->

                    <div class="datos7">                                                
                        <input type="checkbox" name="acepto_chk" id="acepto_chk" value="1" />
                        <label class="form-check-label" for="conditions"><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></label>
                        <b><p>Para consultar nuestro aviso de privacidad,<a href="#" > Da click aquí</a></p></b>
                    </div>
                    
                
                    <div class="boton">
                        <button type="button" onClick="mensaje()" class='btn btn-success ' name='sendForm'>REGISTRATE</button><br>
                    </div>
            </div>
        
        
        
</div>

</body>