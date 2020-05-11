<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Levantamiento de pedido';
$id=Yii::$app->user->identity->id;
$cad = $_REQUEST['cadena'];
$created=date('Y-m-d H:i:s');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

function mensaje(){

   
    
    if (document.getElementById("efectivo").checked==true)
    {
        var pago = 'efectivo';        
    }
    if (document.getElementById("tarjeta").checked==true)
    {
        var pago ='tarjeta';        
    }    
     
    /*
    var check = document.getElementsByName("check").checked;
    alert (check);
    alert($('input:checkbox[name=check]:checked').val());*/
    var cadena = document.getElementById("cadena").value;   
    var nombre = document.getElementById("nombre").value;        
    var telefono = document.getElementById("telefono").value;
    var calle = document.getElementById("calle").value;
    var num = document.getElementById("num").value;    
    var colonia = document.getElementById("colonia").value;
    var municipio = document.getElementById("municipio").value;
    var instrucciones = document.getElementById("instrucciones").value;    
    var user_id = document.getElementById("user_id").value;
    var created = document.getElementById("created").value;

    if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa un nombre!'           
            })
            return false;
        }

        else if (telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu teléfono!'            
            })
            return false;
        }

        else if (isNaN(telefono)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa valores númericos en teléfono!'            
            })
            return false;
        }

        else if( !(/^\d{10}$/.test(telefono)) ) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa 10 dígitos en Celular!'            
            })
            return false;
        }

        else if (calle == null || calle.length == 0 || /^\s+$/.test(calle)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu calle!'            
            })
            return false;
        }

        else if (num == null || num.length == 0 || /^\s+$/.test(num)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu numero de dirección!'            
            })
            return false;
        }

        else if (colonia == null || colonia.length == 0 || /^\s+$/.test(colonia)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu colonia!'            
            })
            return false;
        }

        else if (municipio == null || municipio.length == 0 || /^\s+$/.test(municipio)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor ingresa tu municipio!'            
            })
            return false;
        }

        else if (instrucciones == null || instrucciones.length == 0 || /^\s+$/.test(instrucciones)) {
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Por favor agrega instrucciones de entrega!'            
            })
            return false;
        }


        var parametros = {
                "cadena" : cadena,
                "nombre" : nombre,                    
                "telefono": telefono,
                "calle" : calle,
                "num" : num,                
                "colonia" : colonia,
                "municipio" : municipio,
                "instrucciones" : instrucciones,
                "pago" : pago,
                "user_id" : user_id,
                "created" : created,                 
            };

            $.ajax({
                    data:  parametros,
                    url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/pedido') ?>',
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
                    document.getElementById("telefono").value = "";
                    document.getElementById("calle").value = "";
                    document.getElementById("num").value = "";                    
                    document.getElementById("colonia").value = "";
                    document.getElementById("municipio").value = "";
                    document.getElementById("instrucciones").value = "";
                    //document.getElementById("pago").value = "";                    
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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/pedido.css">  
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<body>
<h1 class="title">Levantamiento de Pedido</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>


<div class="cuadro">        
        
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <input type="hidden" id="user_id" value=<?php echo $id; ?>>
                    <input type="hidden" id="created" value=<?php echo $created; ?>>
                    <input type="hidden" id="cadena" value=<?php echo $cad; ?>>
                    
                    <div class="datos1">
                        <p>NOMBRE DE QUIEN RECIBE EL PEDIDO</p>
                        <input type="text" class="form-control" id="nombre" autofocus="" placeholder="Nombre de quien recibe el pedido" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div> 
                    <div class="datos1">
                        <p>TELÉFONO CELULAR</p>
                        <input type="text" class="form-control" id="telefono" autofocus="" placeholder="Teléfono Celular" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>                                                                 
                    <br><br><br> 

                    <div class="datos2">
                        <p>DIRECCIÓN DE ENTREGA</p>
                        <input type="text" class="form-control" id="calle" autofocus="" placeholder="Calle" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>NÚMERO</p>
                        <input type="text" class="form-control" id="num" autofocus="" placeholder="No." aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>COLONIA</p>
                        <input type="text" class="form-control" id="colonia" autofocus="" placeholder="Colonia" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>MUNICIPIO</p>
                        <input type="text" class="form-control" id="municipio" autofocus="" placeholder="Municipio" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos3">
                    <p>AGREGA INSTRUCCIONES DE ENTREGA</p>
                        <input type="text" class="form-control" id="instrucciones" autofocus="" placeholder="Instrucciones" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                                                
                    </div>                   
                    <br><br><br>
                    
                    
                    <div class="datos4">                                          
                        <p>PAGO</p>
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="efectivo" name="check" id="efectivo">
                            Efectivo
                        </label>                 
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="tarjeta" name="check" id="tarjeta">
                            Tarjeta
                        </label>  
                    </div>
 
                    <div class="line">
                        <p style="color:#76b227; font-weight:900; text-align:center; font-size:18px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                    </div>

                                        
                    <br><br>                
                    <div class="confirmar">
                          <button onClick="mensaje()" class="btn btn-success">Confirmar Pedido</button>
                    </div>
                                    
            </div>
        
</div>

</body>