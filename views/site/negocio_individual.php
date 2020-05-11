<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Lista';
$id = $_REQUEST['id'];

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/registro.css">  
<body>
<h1 class="title">Actualización y registro de contraseña Negocio</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

<?php   
    
      $params=[":id"=>$id];
      if ($id == null)
      {
        Yii::$app->controller->redirect(['listanegocios']);
      }
      else{

      
      $consll = Yii::$app->db->createCommand(
        'SELECT * FROM negocios WHERE id = :id',$params)->queryAll();
        $tams=sizeof($consll);
        $cons=0;
        $nom = "negocios";
        $rol = "negocios";

        while ($cons < $tams) 
        {        
        $id = $consll[$cons]['id'];
        $nombre=$consll[$cons]['nombre'];
        $giro=$consll[$cons]['giro'];
        $nombre_tabla=$nom;
        $rol=$rol;
        $nombre_titular=$consll[$cons]['nombre_titular'];
        $email=$consll[$cons]['email'];
        $celular=$consll[$cons]['celular'];
        $rfc=$consll[$cons]['rfc'];
        $curp=$consll[$cons]['curp'];
        $busqueda=$consll[$cons]['busqueda'];
        $direccion=$consll[$cons]['direccion'];
        $numero=$consll[$cons]['numero'];
        $colonia=$consll[$cons]['colonia'];
        $tarjeta=$consll[$cons]['tarjeta'];
        $factura=$consll[$cons]['factura'];
        $validacion=$consll[$cons]['validacion'];        
        $cons++;
        }   
    }             
        
?>


<script type = "text/javascript">

function mensaje(){
       
        var email = document.getElementById("email").value;
        var userid = document.getElementById("userid").value;
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
                    "email" : email,
                    "userid" : userid,
                    "rol": rol,
                    "nombre_tabla" : nombre_tabla,
                    "password" : password
                };

                $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/extra') ?>',
                        type:  'post',
                        beforeSend: function () {
                        },
                        success:  function (response) {
                if (response){                                        
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos actualizados correctamente',
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
                        document.getElementById("userid").value = "";
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

<div class="cuadro">        
            
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="hidden" name="id" id="userid" value="<?php echo $id;?>">
                    <input type="hidden" name="rol" id="rol" value="<?php echo $rol;?>">
                    <input type="hidden" name="nombre_tabla" id="nombre_tabla" value="<?php echo $nombre_tabla;?>">
                    <div class="datos1">
                        <p>NOMBRE COMERCIAL</p>
                        <input type="text" class="form-control" name="nombre" autofocus="" placeholder="Nombre del comercio o empresa" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $nombre;?>">
                    </div>
                    <div class="datos1">
                        <p>GIRO</p>
                        <input type="text" class="form-control" name="giro" autofocus="" placeholder="Tipo de negocio" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $giro;?>">
                    </div>       
                    <div class="datos1">
                        <P>CONTRASEÑA</P>                        
                        <input type="password" class="form-control" name="password" id="password" autofocus="" placeholder="Contraseña" aria-required="true" aria-invalid="true" required="true" autocomplete="false" >
                    </div>
                    <br><br><br>
                   
                    <div class="datos2">
                        <p>NOMBRE DEL TITULAR</p>
                        <br>
                        <input type="text" class="form-control" name="nombre_titular" autofocus="" placeholder="Nombre del titular" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $nombre_titular;?>">
                    </div>
                    <div class="datos2">
                        <p>CORREO PARA PROGRAMAR</p>
                        <br>
                        <input type="text" class="form-control" name="email" id="email" autofocus="" placeholder="Correo" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $email;?>">
                    </div>
                    <div class="datos2">                    
                        <p>NÚMERO CELULAR PARA PEDIDOS</p>
                        <br>
                        <input type="text" class="form-control" name="celular" autofocus="" placeholder="Número celular" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $celular;?>">
                    </div>
                    <br><br><br>     

                    <div class="datos3">
                        <p>RFC</p>        
                        <br>                
                        <input type="text" class="form-control" name="rfc" autofocus="" placeholder="RFC" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $rfc;?>">
                    </div>
                    <div class="datos3">
                        <p>CURP</p>
                        <br>
                        <input type="text" class="form-control" name="curp" autofocus="" placeholder="CURP" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $curp;?>">
                    </div>
                    <div class="datos3">
                        <p>PALABRAS CLAVE DE BÚSQUEDA</p>
                        <br>
                        <input type="text" class="form-control" name="busqueda" autofocus="" placeholder="Palabras Clave de búsqueda" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $busqueda;?>">
                    </div>
                    <br><br><br>

                    <div class="datos4">
                        <p>DIRECCIÓN</p>
                        <input type="text" class="form-control" name="direccion" autofocus="" placeholder="Calle" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $direccion;?>">
                    </div>
                    <div class="datos4">
                        <p>NÚMERO</p>
                        <input type="text" class="form-control" name="numero" autofocus="" placeholder="No." aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $numero;?>">
                    </div>
                    <div class="datos4">
                        <p>COLONIA</p>
                        <input type="text" class="form-control" name="colonia" autofocus="" placeholder="Colonia" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $colonia;?>">
                    </div>
                    <br><br><br>

                    <div class="datos5">
                        <p>¿ACCEDES A ESQUEMA DE COBRO CON TARJETA? SI/NO</p>
                        <input type="text" class="form-control" name="tarjeta" autofocus="" placeholder="¿Accedes a esquema de cobro con tarjeta? SI/NO?" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $tarjeta;?>">                        
                    </div>
                    <div class="datos5">
                        <p>¿FACTURA? SI/NO</p>
                        <input type="text" class="form-control" name="factura" autofocus="" placeholder="Palabras Clave de búsqueda" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $factura;?>">                        
                    </div>
                    <br><br><br>

                    <div class="datos6">
                        <p>¿ESTÁ DISPUESTO A LA VALIDACIÓN DEL PROCESO DE SANIDAD POR NUESTROS INSPECTORES? SI/NO</p>
                        <input type="text" class="form-control" name="validacion" autofocus="" placeholder="¿Está dispuesto a la validación del proceso de sanidad por nuestros inspectores? SI/NO" aria-required="true" aria-invalid="true" required="true" autocomplete="false" value="<?php echo $validacion;?>">
                    </div>
                    <br><br><br>                           
                    
                
                    <div class="boton">
                        <button type="button" onClick="mensaje()" class='btn btn-success ' name='sendForm'>ACTUALIZAR</button><br>
                    </div>
            </div>
        
                
</div>

</body>