<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro de Usuarios';
$user = $_POST['user'];
$correo = $_POST['email'];

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script type = "text/javascript">

function mensaje(){
        
    if (document.getElementById("acepto_chk").checked==true)
    {
        var nombre_usuario = document.getElementById("nombre_usuario").value;
        var a_paterno = document.getElementById("a_paterno").value;
        var a_materno = document.getElementById("a_materno").value;
        var celular = document.getElementById("celular").value;
        var email = document.getElementById("email").value;
        var direccion = document.getElementById("direccion").value;
        var numero = document.getElementById("numero").value;
        var colonia = document.getElementById("colonia").value;
        var municipio = document.getElementById("municipio").value;
        var c_postal = document.getElementById("c_postal").value;
        var ref_domicilio = document.getElementById("ref_domicilio").value;

            var parametros = {
                    "nombre_usuario" : nombre_usuario,
                    "a_paterno" : a_paterno,
                    "a_materno": a_materno,
                    "celular" : celular,
                    "email" : email,
                    "direccion": direccion,
                    "numero" : numero,
                    "colonia" : colonia,
                    "municipio" : municipio,
                    "c_postal" : c_postal,
                    "ref_domicilio" : ref_domicilio          
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
                        title: 'Datos registrados exitósamente, Panel de control se pondrá en contacto contigo',
                        showClass: {
                            popup: 'animated fadeInDown faster'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp faster'
                        }
                        })
                        document.getElementById("nombre_usuario").value = "";
                        document.getElementById("a_paterno").value = "";
                        document.getElementById("a_materno").value = "";
                        document.getElementById("celular").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("direccion").value = "";
                        document.getElementById("numero").value = "";
                        document.getElementById("colonia").value = "";
                        document.getElementById("municipio").value = "";
                        document.getElementById("c_postal").value = "";
                        document.getElementById("ref_domicilio").value = "";
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
                    <div class="datos1">
                        <p>NOMBRE</p>
                        <input type="text" class="form-control" id="nombre_usuario" autofocus="" placeholder="Nombre" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $user;?>">
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
                    <br><br><br>     

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