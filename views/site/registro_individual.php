<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Actualización de registro';
$id = $_REQUEST['id'];

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/registro.css">  
<body>
<h1 class="title">Actualización de registro</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<?php   
    
      $params=[":id"=>$id];
      if ($id == null)
      {
        Yii::$app->controller->redirect(['lista']);
      }
      else{

      
      $consll = Yii::$app->db->createCommand(
        'SELECT * FROM aspirantes WHERE id = :id',$params)->queryAll();
        $tams=sizeof($consll);
        $cons=0;
   

        while ($cons < $tams) 
        {        
        $id = $consll[$cons]['id'];
        $nombre=$consll[$cons]['nombre'];
        $paterno=$consll[$cons]['paterno'];
        $materno=$consll[$cons]['materno'];
        $vehiculo=$consll[$cons]['vehiculo'];
        $curp=$consll[$cons]['curp'];
        $tel_concesionario=$consll[$cons]['tel_concesionario'];
        $tel_envios=$consll[$cons]['tel_envios'];
        $direccion=$consll[$cons]['direccion'];
        $localidad=$consll[$cons]['localidad'];
        $num=$consll[$cons]['num'];
        $placas=$consll[$cons]['placas'];
        $marca=$consll[$cons]['marca'];
        $modelo=$consll[$cons]['modelo'];
        $serie=$consll[$cons]['serie'];
        $conductores=$consll[$cons]['conductores'];
        $celular=$consll[$cons]['celular'];
        $horario=$consll[$cons]['horario'];
        $ine=$consll[$cons]['ine'];
        $email=$consll[$cons]['email'];
        $pago=$consll[$cons]['pago'];
        $cons++;
        }   
    }             
        
?>

<div class="cuadro">        
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Factualizar">
                <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="personales1">
                        <p>NOMBRE DEL TITULAR</p>
                        <input type="text" class="form-control" name="nombre" autofocus="" placeholder="Nombre" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $nombre;?>">
                    </div>
                    <div class="personales1">
                        <p>APELLIDO PATERNO</p>
                        <input type="text" class="form-control" name="paterno" autofocus="" placeholder="Apellido Parterno" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $paterno;?>">
                    </div>
                    <div class="personales1">
                        <P>APELLIDO MATERNO</P>
                        <input type="text" class="form-control" name="materno" autofocus="" placeholder="Apellido Materno" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $materno;?>">
                    </div>                       
                    <br><br><br>

                    <div class="datos1">
                        <P>CONTRASEÑA</P>
                        <br>
                        <input type="password" class="form-control" name="contra" autofocus="" placeholder="Contraseña" aria-required="true" aria-invalid="true" required="true" autocomplete="false" >
                    </div>
                    <div class="datos1">
                        <P>TIPO DE VEHÍCULO: TAXI/PRIVADO/MOTO</P>
                        <input type="text" class="form-control" name="vehiculo" autofocus="" placeholder="Tipo de vehículo: TAXI/PRIVADO/MOTO" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $vehiculo;?>">
                    </div>
                    <div class="datos1">
                        <P>CURP</P>
                        <br>
                        <input type="text" class="form-control" name="curp" autofocus="" placeholder="CURP del concesionario/propietario" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $curp;?>">
                    </div>
                    <br><br><br>

                    <div class="datos2">
                        <p>TELEFONO. CONCESIONARIO/PROPIETARIO</p>
                        <input type="text" class="form-control" name="tel_concesionario" autofocus="" placeholder="Tel. Concesionario/Propietario" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $tel_concesionario;?>">
                    </div>
                    <div class="datos2">
                        <p>TELEFONO. DE ATENCIÓN A ENVÍOS</p>
                        <br>
                        <input type="text" class="form-control" name="tel_envios" autofocus="" placeholder="Tel. de atención a envíos" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $tel_envios;?>">
                    </div>
                    <div class="datos2">                    
                        <p>CORREO ELECTRÓNICO</p>
                        <br>
                        <input type="text" class="form-control" name="email" autofocus="" placeholder="Correo electrónico" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $email;?>">
                    </div>
                    <br><br><br>                    
                    <div class="datos3">
                        <p>DIRECCIÓN: CALLE Y FRACCIONAMIENTO</p>                        
                        <input type="text" class="form-control" name="direccion" autofocus="" placeholder="Calle y fraccionamiento" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $direccion;?>">
                    </div>
                    <div class="datos3">
                        <p>LOCALIDAD</p>
                        <br>
                        <input type="text" class="form-control" name="localidad" autofocus="" placeholder="Localidad" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $localidad;?>">
                    </div>
                    <div class="datos3">
                        <p>NÚMERO EXTERIOR</p>
                        <br>
                        <input type="text" class="form-control" name="num" autofocus="" placeholder="Número exterior" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $num;?>">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>PLACAS</p>
                        <input type="text" class="form-control" name="placas" autofocus="" placeholder="Placas" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $placas;?>">
                    </div>
                    <div class="datos4">
                        <p>MARCA</p>
                        <input type="text" class="form-control" name="marca" autofocus="" placeholder="Marca" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $marca;?>">
                    </div>
                    <div class="datos4">
                        <p>MODELO</p>
                        <input type="text" class="form-control" name="modelo" autofocus="" placeholder="Modelo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $modelo;?>">
                    </div>
                    <br><br><br>

                    <div class="datos5">
                        <p>No. Serie</p>
                        <input type="text" class="form-control" name="serie" autofocus="" placeholder="No. Serie" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $serie;?>">
                    </div>
                    <div class="datos5">
                        <p>CONDUCTORES(MÁXIMO 2)</p>
                        <input type="text" class="form-control" name="conductores" autofocus="" placeholder="Conductores (máximo 2)" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $conductores;?>">
                    </div>
                    <div class="datos5">
                        <p>CELULAR DE CONDUCTORES</p>
                        <input type="text" class="form-control" name="celular" autofocus="" placeholder="Celular de conductores" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $celular;?>">
                    </div>
                    <br><br><br>
                    
                    <div class="datos6">
                        <p>HORARIO DE CONDUCTORES</p>
                        <input type="text" class="form-control" name="horario" autofocus="" placeholder="Horario de conductores" aria-required="true" aria-invalname="true" required="true" autocomplete="false" value="<?php echo $horario;?>">
                    </div>
                    <div class="datos6">
                        <p>INE/TARJETÓN DE SSP</p>
                        <input type="text" class="form-control" name="ine" autofocus="" placeholder="INE/ Tarjetón de SSP" aria-required="true" aria-invalname="true" required="true" autocomplete="false" value="<?php echo $ine;?>">
                    </div>                                                    
                    <div class="datos6">
                        <p>PAGO: TARJETA/EFECTIVO</p>
                        <input type="text" class="form-control" name="pago" autofocus="" placeholder="Pago: Tarjeta/Efectivo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $pago;?>">
                    </div>
                    <br><br><br>     
                    <div class="boton">
                        <button type="submit"  class='btn btn-success ' name='sendForm'>ACTUALIZAR</button><br>
                    </div>
            </div>
        </form>
                
</div>

</body>