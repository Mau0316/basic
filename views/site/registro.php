<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'A Domicilio';
$user = $_POST['user'];
$correo = $_POST['email'];
?>
<script type = "text/javascript">
function valid() {
    //Validación de campo vacío
    if (document.getElementById("acepto_chk").checked==false){
        alert("Debes aceptar Términos y Condiciones");
        document.getElementById("acepto_chk").focus();
        return false;
    }
    return true;
}





</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/registro.css">  
<body>
<h1 class="title">Registro Unidades de Reparto</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<div class="cuadro">        
<?php
            if (isset($_POST['sendForm'])) {
                if (isset($_POST['conditions']) && $_POST['conditions'] == '1')
                    echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
                else
                    echo '<div class="alert alert-danger">Debes aceptar las condiciones de uso.</div>';
            }
            ?>
        <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fregistro" onSubmit="return valid()">
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <div class="personales1">
                        <p>NOMBRE DEL TITULAR</p>
                        <input type="text" class="form-control" name="nombre" autofocus="" placeholder="Nombre" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $user;?>">
                    </div>
                    <div class="personales1">
                        <p>APELLIDO PATERNO</p>
                        <input type="text" class="form-control" name="paterno" autofocus="" placeholder="Apellido Parterno" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="personales1">
                        <P>APELLIDO MATERNO</P>
                        <input type="text" class="form-control" name="materno" autofocus="" placeholder="Apellido Materno" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>                       
                    <br><br><br>

                    <div class="datos1">
                        <P>TIPO DE VEHÍCULO: TAXI/PRIVADO/MOTO</P>
                        <input type="text" class="form-control" name="vehiculo" autofocus="" placeholder="Tipo de vehículo: TAXI/PRIVADO/MOTO" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos1">
                        <P>CURP</P>
                        <input type="text" class="form-control" name="curp" autofocus="" placeholder="CURP del concesionario/propietario" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos2">
                        <p>TELEFONO. CONCESIONARIO/PROPIETARIO</p>
                        <input type="text" class="form-control" name="tel_concesionario" autofocus="" placeholder="Tel. Concesionario/Propietario" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>TELEFONO. DE ATENCIÓN A ENVÍOS</p>
                        <br>
                        <input type="text" class="form-control" name="tel_envios" autofocus="" placeholder="Tel. de atención a envíos" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">                    
                        <p>CORREO ELECTRÓNICO</p>
                        <br>
                        <input type="text" class="form-control" name="email" autofocus="" placeholder="Correo electrónico" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $correo;?>">
                    </div>
                    <br><br><br>                    
                    <div class="datos3">
                        <p>DIRECCIÓN: CALLE Y FRACCIONAMIENTO</p>                        
                        <input type="text" class="form-control" name="direccion" autofocus="" placeholder="Calle y fraccionamiento" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>LOCALIDAD</p>
                        <br>
                        <input type="text" class="form-control" name="localidad" autofocus="" placeholder="Localidad" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos3">
                        <p>NÚMERO EXTERIOR</p>
                        <br>
                        <input type="text" class="form-control" name="num" autofocus="" placeholder="Número exterior" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>PLACAS</p>
                        <input type="text" class="form-control" name="placas" autofocus="" placeholder="Placas" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos4">
                        <p>MARCA</p>
                        <input type="text" class="form-control" name="marca" autofocus="" placeholder="Marca" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos4">
                        <p>MODELO</p>
                        <input type="text" class="form-control" name="modelo" autofocus="" placeholder="Modelo" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos5">
                        <p>No. Serie</p>
                        <input type="text" class="form-control" name="serie" autofocus="" placeholder="No. Serie" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos5">
                        <p>CONDUCTORES(MÁXIMO 2)</p>
                        <input type="text" class="form-control" name="conductores" autofocus="" placeholder="Conductores (máximo 2)" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos6">
                        <p>CELULAR DE CONDUCTORES</p>
                        <input type="text" class="form-control" name="celular" autofocus="" placeholder="Celular de conductores" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                        
                    </div>
                    <div class="datos6">
                        <p>HORARIO DE CONDUCTORES</p>
                        <input type="text" class="form-control" name="horario" autofocus="" placeholder="Horario de conductores" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                        
                    </div>
                    <div class="datos6">
                        <p>INE/TARJETÓN DE SSP</p>
                        <input type="text" class="form-control" name="ine" autofocus="" placeholder="INE/ Tarjetón de SSP" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos7">                                                
                        <input type="checkbox" name="acepto_chk" id="acepto_chk" value="1" />
                        <label class="form-check-label" for="conditions"><b>CONFIRMO QUE HE LEÍDO, Y QUE ENTIENDO Y ACEPTO LOS TÉRMINOS Y CONDICIONES DEL PRESENTE AVISO DE PRIVACIDAD</b></label>
                        <b><p>Para consultar nuestro aviso de privacidad,<a href="#" > Da click aquí</a></p></b>
                    </div>
                    
                    <div class="datos7">
                        <p>PAGO: TARJETA/EFECTIVO</p>
                        <input type="text" class="form-control" name="pago" autofocus="" placeholder="Pago: Tarjeta/Efectivo" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="boton">
                        <button type="submit" class='btn btn-success ' name='sendForm'>REGISTRATE</button><br>
                    </div>
            </div>

        </form>
        
    
</div>

</body>