<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrate';
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
        var paterno = document.getElementById("paterno").value;
        var materno = document.getElementById("materno").value;
        var vehiculo = document.getElementById("vehiculo").value;
        var curp = document.getElementById("curp").value;
        var tel_concesionario = document.getElementById("tel_concesionario").value;
        var tel_envios = document.getElementById("tel_envios").value;
        var email = document.getElementById("email").value;
        var direccion = document.getElementById("direccion").value;
        var localidad = document.getElementById("localidad").value;
        var num = document.getElementById("num").value;
        var placas = document.getElementById("placas").value;
        var marca = document.getElementById("marca").value;
        var modelo = document.getElementById("modelo").value;
        var serie = document.getElementById("serie").value;
        var conductores = document.getElementById("conductores").value;
        var celular = document.getElementById("celular").value;
        var horario = document.getElementById("horario").value;
        var ine = document.getElementById("ine").value;
        var pago = document.getElementById("pago").value;

            var parametros = {
                    "nombre" : nombre,
                    "paterno" : paterno,
                    "materno": materno,
                    "vehiculo" : vehiculo,
                    "curp" : curp,
                    "tel_concesionario": tel_concesionario,
                    "tel_envios" : tel_envios,
                    "email" : email,
                    "direccion" : direccion,
                    "localidad" : localidad,
                    "num" : num,
                    "placas" : placas,
                    "marca" : marca,
                    "modelo" : modelo,
                    "serie" : serie,
                    "conductores" : conductores,
                    "celular" : celular,
                    "horario" : horario,                
                    "ine" : ine,
                    "pago" : pago
                };

                $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/registro') ?>',
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
                        document.getElementById("paterno").value = "";
                        document.getElementById("materno").value = "";
                        document.getElementById("vehiculo").value = "";
                        document.getElementById("curp").value = "";
                        document.getElementById("tel_concesionario").value = "";
                        document.getElementById("tel_envios").value = "";
                        document.getElementById("direccion").value = "";                        
                        document.getElementById("localidad").value = "";
                        document.getElementById("num").value = "";
                        document.getElementById("placas").value = "";
                        document.getElementById("marca").value = "";
                        document.getElementById("modelo").value = "";
                        document.getElementById("serie").value = "";
                        document.getElementById("conductores").value = "";
                        document.getElementById("celular").value = "";
                        document.getElementById("horario").value = "";
                        document.getElementById("ine").value = "";
                        document.getElementById("pago").value = "";
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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/registro.css">  
<body>
<h1 class="title">Registro Unidades de Reparto</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<div class="cuadro">        
        
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <div class="personales1">
                        <p>NOMBRE DEL TITULAR</p>
                        <input type="text" class="form-control" id="nombre" autofocus="" placeholder="Nombre" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $user;?>">
                    </div>
                    <div class="personales1">
                        <p>APELLIDO PATERNO</p>
                        <input type="text" class="form-control" id="paterno" autofocus="" placeholder="Apellido Parterno" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="personales1">
                        <P>APELLIDO MATERNO</P>
                        <input type="text" class="form-control" id="materno" autofocus="" placeholder="Apellido Materno" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>                       
                    <br><br><br>

                    <div class="datos1">
                        <P>TIPO DE VEHÍCULO: TAXI/PRIVADO/MOTO</P>
                        <input type="text" class="form-control" id="vehiculo" autofocus="" placeholder="Tipo de vehículo: TAXI/PRIVADO/MOTO" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos1">
                        <P>CURP</P>
                        <input type="text" class="form-control" id="curp" autofocus="" placeholder="CURP del concesionario/propietario" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos2">
                        <p>TELEFONO. CONCESIONARIO/PROPIETARIO</p>
                        <input type="text" class="form-control" id="tel_concesionario" autofocus="" placeholder="Tel. Concesionario/Propietario" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>TELEFONO. DE ATENCIÓN A ENVÍOS</p>
                        <br>
                        <input type="text" class="form-control" id="tel_envios" autofocus="" placeholder="Tel. de atención a envíos" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">                    
                        <p>CORREO ELECTRÓNICO</p>
                        <br>
                        <input type="text" class="form-control" id="email" autofocus="" placeholder="Correo electrónico" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $correo;?>">
                    </div>
                    <br><br><br>                    
                    <div class="datos3">
                        <p>DIRECCIÓN: CALLE Y FRACCIONAMIENTO</p>                        
                        <input type="text" class="form-control" id="direccion" autofocus="" placeholder="Calle y fraccionamiento" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>LOCALIDAD</p>
                        <br>
                        <input type="text" class="form-control" id="localidad" autofocus="" placeholder="Localidad" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>NÚMERO EXTERIOR</p>
                        <br>
                        <input type="text" class="form-control" id="num" autofocus="" placeholder="Número exterior" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>PLACAS</p>
                        <input type="text" class="form-control" id="placas" autofocus="" placeholder="Placas" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos4">
                        <p>MARCA</p>
                        <input type="text" class="form-control" id="marca" autofocus="" placeholder="Marca" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos4">
                        <p>MODELO</p>
                        <input type="text" class="form-control" id="modelo" autofocus="" placeholder="Modelo" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos5">
                        <p>No. Serie</p>
                        <input type="text" class="form-control" id="serie" autofocus="" placeholder="No. Serie" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos5">
                        <p>CONDUCTORES(MÁXIMO 2)</p>
                        <input type="text" class="form-control" id="conductores" autofocus="" placeholder="Conductores (máximo 2)" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos6">
                        <p>CELULAR DE CONDUCTORES</p>
                        <input type="text" class="form-control" id="celular" autofocus="" placeholder="Celular de conductores" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                        
                    </div>
                    <div class="datos6">
                        <p>HORARIO DE CONDUCTORES</p>
                        <input type="text" class="form-control" id="horario" autofocus="" placeholder="Horario de conductores" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                        
                    </div>
                    <div class="datos6">
                        <p>INE/TARJETÓN DE SSP</p>
                        <input type="text" class="form-control" id="ine" autofocus="" placeholder="INE/ Tarjetón de SSP" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos7">                                                
                        <input type="checkbox" name="acepto_chk" id="acepto_chk" value="1" />
                        <label class="form-check-label" for="conditions"><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></label>
                        <b><p>Para consultar nuestro aviso de privacidad,<a href="#" > Da click aquí</a></p></b>
                    </div>
                    
                    <div class="datos7">
                        <p>PAGO: TARJETA/EFECTIVO</p>
                        <input type="text" class="form-control" id="pago" autofocus="" placeholder="Pago: Tarjeta/Efectivo" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="boton">
                        <button type="button" onClick="mensaje()" class='btn btn-success ' name='sendForm'>REGISTRATE</button><br>
                    </div>
            </div>

        
        
    
</div>

</body>