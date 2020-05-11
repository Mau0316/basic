<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro de Negocios';
$user = $_POST['user'];
$correo = $_POST['email'];

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script type = "text/javascript">



function mensaje(){
        
    if (document.getElementById("acepto_chk").checked==true)
    {
        var nombre = document.getElementById("nombre").value;
        var giro = document.getElementById("giro").value;
        var nombre_titular = document.getElementById("nombre_titular").value;
        var email = document.getElementById("email").value;
        var celular = document.getElementById("celular").value;
        var rfc = document.getElementById("rfc").value;
        var curp = document.getElementById("curp").value;
        var busqueda = document.getElementById("busqueda").value;
        var direccion = document.getElementById("direccion").value;
        var numero = document.getElementById("numero").value;
        var colonia = document.getElementById("colonia").value;
        var tarjeta = document.getElementById("tarjeta").value;
        var factura = document.getElementById("factura").value;
        var validacion = document.getElementById("validacion").value;
        var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        
        if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa el nombre de tu negocio!'            
            })
            return false;
        }
        

        else if (giro == null || giro.length == 0 || /^\s+$/.test(giro)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tipo de negocio!'            
            })
            return false;
        }

        else if (nombre_titular == null || nombre_titular.length == 0 || /^\s+$/.test(nombre_titular)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa el nombre del titular!'            
            })
            return false;
        }

        else if (email == null || email.length == 0 || /^\s+$/.test(email)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa dirección de correo electrónico!'            
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

        else if (celular == null || celular.length == 0 || /^\s+$/.test(celular)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa un número de celular para pedidos!'            
            })
            return false;
        }

        else if (isNaN(celular)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa valores númericos en Número de celular!'            
            })
            return false;
        }

        else if (rfc == null || rfc.length == 0 || /^\s+$/.test(rfc)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa un RFC!'            
            })
            return false;
        }

        else if (curp == null || curp.length == 0 || /^\s+$/.test(curp)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa un CURP!'            
            })
            return false;
        }

        else if (busqueda == null || busqueda.length == 0 || /^\s+$/.test(busqueda)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa una palabra de búsqueda!'            
            })
            return false;
        }

        else if (direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa la calle!'            
            })
            return false;
        }

        else if (numero == null || numero.length == 0 || /^\s+$/.test(numero)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa un número de dirección!'            
            })
            return false;
        }

        else if (colonia == null || colonia.length == 0 || /^\s+$/.test(colonia)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa una colonia!'            
            })
            return false;
        }

        else if (tarjeta == null || tarjeta.length == 0 || /^\s+$/.test(tarjeta)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa esquema de cobro de tarjeta!'
            })
            return false;
        }

        else if (factura == null || factura.length == 0 || /^\s+$/.test(factura)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresar si cuenta con factura!'            
            })
            return false;
        }

        else if (validacion == null || validacion.length == 0 || /^\s+$/.test(validacion)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa si aceptas una validación de sanidad!'            
            })
            return false;
        }

            var parametros = {
                    "nombre" : nombre,
                    "giro" : giro,
                    "nombre_titular": nombre_titular,
                    "busqueda" : busqueda,
                    "celular" : celular,
                    "rfc": rfc,
                    "curp" : curp,
                    "email" : email,
                    "direccion" : direccion,
                    "numero" : numero,
                    "colonia" : colonia,
                    "tarjeta" : tarjeta,
                    "factura" : factura,
                    "validacion" : validacion
                                 
                };

                $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/negocios') ?>',
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
                        document.getElementById("nombre").value = "";
                        document.getElementById("giro").value = "";
                        document.getElementById("nombre_titular").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("celular").value = "";
                        document.getElementById("rfc").value = "";
                        document.getElementById("curp").value = "";
                        document.getElementById("busqueda").value = "";
                        document.getElementById("direccion").value = "";
                        document.getElementById("numero").value = "";
                        document.getElementById("colonia").value = "";
                        document.getElementById("tarjeta").value = "";
                        document.getElementById("factura").value = "";
                        document.getElementById("validacion").value = "";
                   
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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/negocios.css">  
<body>
<h1 class="title">Registro de Negocios</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<div class="cuadro">        
        
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <div class="datos1">
                        <p>NOMBRE COMERCIAL</p>
                        <input type="text" class="form-control" id="nombre" autofocus="" placeholder="Nombre del comercio o empresa" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $user;?>">
                    </div>
                    <div class="datos1">
                        <p>GIRO</p>
                        <input type="text" class="form-control" id="giro" autofocus="" placeholder="Tipo de negocio" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>    
                    <!--    
                    <div class="datos1">
                        <p>IMÁGEN NEGOCIO</p>
                        <input type="file" class="form-control"  aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>                                                 
                    -->
                    <br><br><br>
                   
                    <div class="datos2">
                        <p>NOMBRE DEL TITULAR</p>
                        <br>
                        <input type="text" class="form-control" id="nombre_titular" autofocus="" placeholder="Nombre del titular" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>CORREO PARA PROGRAMAR</p>
                        <br>
                        <input type="text" class="form-control" id="email" autofocus="" placeholder="Correo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $correo;?>">
                    </div>
                    <div class="datos2">                    
                        <p>NÚMERO CELULAR PARA PEDIDOS</p>
                        <br>
                        <input type="text" class="form-control" id="celular" autofocus="" placeholder="Número celular" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>     

                    <div class="datos3">
                        <p>RFC</p>        
                        <br>                
                        <input type="text" class="form-control" id="rfc" autofocus="" placeholder="RFC" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>CURP</p>
                        <br>
                        <input type="text" class="form-control" id="curp" autofocus="" placeholder="CURP" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>PALABRAS CLAVE DE BÚSQUEDA</p>
                        <br>
                        <input type="text" class="form-control" id="busqueda" autofocus="" placeholder="Palabras Clave de búsqueda" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>DIRECCIÓN</p>
                        <input type="text" class="form-control" id="direccion" autofocus="" placeholder="Calle" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos4">
                        <p>NÚMERO</p>
                        <input type="text" class="form-control" id="numero" autofocus="" placeholder="No." aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos4">
                        <p>COLONIA</p>
                        <input type="text" class="form-control" id="colonia" autofocus="" placeholder="Colonia" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos5">
                        <p>¿ACCEDES A ESQUEMA DE COBRO CON TARJETA? SI/NO</p>
                        <input type="text" class="form-control" id="tarjeta" autofocus="" placeholder="¿Accedes a esquema de cobro con tarjeta? SI/NO?" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                        
                    </div>
                    <div class="datos5">
                        <p>¿FACTURA? SI/NO</p>
                        <br>
                        <input type="text" class="form-control" id="factura" autofocus="" placeholder="¿Factura? Si/No" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos6">
                        <p>¿ESTÁ DISPUESTO A LA VALIDACIÓN DEL PROCESO DE SANIDAD POR NUESTROS INSPECTORES? SI/NO</p>
                        <input type="text" class="form-control" id="validacion" autofocus="" placeholder="¿Está dispuesto a la validación del proceso de sanidad por nuestros inspectores? SI/NO" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos7">                                                
                        <input type="checkbox" name="acepto_chk" id="acepto_chk" value="1" />
                        <label class="form-check-label" for="conditions"><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></label>                        
                    </div>
                    <div class="datos7">
                        <b><p>Para consultar nuestro aviso de privacidad,<a href="#" > Da click aquí</a></p></b>
                    </div>
                    
                
                    <div class="boton">
                        <button type="button" onClick="mensaje()" class='btn btn-success ' name='sendForm'>REGISTRATE</button><br>
                    </div>
            </div>
                    
</div>

</body>