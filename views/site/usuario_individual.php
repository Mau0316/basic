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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/usuarios.css">  
<body>
<h1 class="title">Actualización de registro</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<?php   
    
      $params=[":id"=>$id];
      if ($id == null)
      {
        Yii::$app->controller->redirect(['listausuarios']);
      }
      else{

      
      $consll = Yii::$app->db->createCommand(
        'SELECT * FROM usuarios WHERE id = :id',$params)->queryAll();
        $tams=sizeof($consll);
        $cons=0;
   

        while ($cons < $tams) 
        {        
        $id = $consll[$cons]['id'];
        $nombre_usuario=$consll[$cons]['nombre_usuario'];
        $a_paterno=$consll[$cons]['a_paterno'];
        $a_materno=$consll[$cons]['a_materno'];
        $celular=$consll[$cons]['celular'];
        $email=$consll[$cons]['email'];
        $direccion=$consll[$cons]['direccion'];
        $numero=$consll[$cons]['numero'];
        $colonia=$consll[$cons]['colonia'];
        $municipio=$consll[$cons]['municipio'];
        $c_postal=$consll[$cons]['c_postal'];
        $ref_domicilio=$consll[$cons]['ref_domicilio'];     
        $cons++;
        }   
    }             
        
?>

<div class="cuadro">        
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Factualizarusuario">
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="datos1">
                        <p>NOMBRE</p>
                        <input type="text" class="form-control" name="nombre_usuario" autofocus="" placeholder="Nombre" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $nombre_usuario;?>">
                    </div>
                    <div class="datos1">
                        <p>APELLIDO PATERNO</p>
                        <input type="text" class="form-control" name="a_paterno" autofocus="" placeholder="Apellido paterno" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $a_paterno;?>">
                    </div>   
                    <div class="datos1">
                        <p>APELLIDO MATERNO</p>
                        <input type="text" class="form-control" name="a_materno" autofocus="" placeholder="Apellido materno" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $a_materno;?>">
                    </div>                                    
                    <br><br><br>
                   
                    <div class="datos2">
                        <p>TELÉFONO CELULAR</p>
                        <input type="text" class="form-control" name="celular" autofocus="" placeholder="Número de teléfono" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $celular;?>">
                    </div>
                    <div class="datos2">
                        <p>CORREO ELECTRÓNICO</p>
                        <input type="text" class="form-control" name="email" autofocus="" placeholder="Correo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $email;?>">
                    </div>
                    <div class="datos2">
                        <p>CONTRASEÑA</p>
                        <input type="password" class="form-control" name="contra" autofocus="" placeholder="Contraseña" aria-required="true" aria-invalid="true" required="true" autocomplete="false" >
                    </div>
                    <br><br><br>     

                    <div class="datos3">
                        <p>DIRECCIÓN</p>
                        <input type="text" class="form-control" name="direccion" autofocus="" placeholder="Calle" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $direccion;?>">
                    </div>                    
                    <div class="datos3">
                        <p>NÚMERO</p>
                        <input type="text" class="form-control" name="numero" autofocus="" placeholder="No." aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $numero;?>">
                    </div>
                    <div class="datos3">
                        <p>COLONIA</p>
                        <input type="text" class="form-control" name="colonia" autofocus="" placeholder="Colonia" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $colonia;?>">
                    </div>                    
                    <div class="datos3">
                        <p>MUNICIPIO</p>
                        <input type="text" class="form-control" name="municipio" autofocus="" placeholder="Municipio" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $municipio;?>">
                    </div>
                    <div class="datos3">
                        <p>CÓDIGO POSTAL</p>
                        <input type="text" class="form-control" name="c_postal" autofocus="" placeholder="c.p" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $c_postal;?>">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>REFERENCIAS DE DOMICILIO (color de vivienda, seña particular, entre calles, etc.)</p>
                        <input type="text" class="form-control" name="ref_domicilio" autofocus="" placeholder="(Color de vivienda, seña particular, entre calles, ect.)" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $ref_domicilio;?>">
                    </div>
                    <br><br><br>
                                
                    <div class="boton">
                        <button type="submit"  class='btn btn-success ' name='sendForm'>ACTUALIZAR</button><br>
                    </div>
            </div>
        </form>
                
</div>

</body>