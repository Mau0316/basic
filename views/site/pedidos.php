<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrate';


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/pedido.css">  
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<body>
<h1 class="title">Levantamiento de Pedido</h1>
<p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>


<div class="padre">
    <div class="menu">  
                <div class="imagen">
                    <img src="https://cdn2.melodijolola.com/media/files/styles/nota_imagen/public/field/image/chilaquiles-rojos.jpg" alt="">
                </div>
        <div class="info">
               <div class="titulo">
                       <label for="">Producto 1 </label>                       
               </div>
               <br>
               <div class="dato">
                    <p>Descripción del producto</p>
                    <p>Descripción del producto, Descripción del producto, Descripción del producto, Descripción del producto</p>
               </div>
        </div>
    </div>
</div>

<div class="cuadro">        
        
            <div class="inputs">                
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <div class="datos1">
                        <p>NOMBRE DE QUIEN RECIBE EL PEDIDO</p>
                        <input type="text" class="form-control" id="nombre" autofocus="" placeholder="Nombre de quien recibe el pedido" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos1">
                        <p>FECHA DE ENTREGA</p>
                        <input type="text" class="form-control" id="fehcha" autofocus="" placeholder="Fecha de entrega" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>    
                    <div class="datos1">
                        <p>HORA DE ENTREGA</p>
                        <input type="text" class="form-control" id="hora" autofocus="" placeholder="Hora de entrega" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>                             
                    <br><br><br> 

                    <div class="datos2">
                        <p>DIRECCIÓN DE ENTREGA</p>
                        <input type="text" class="form-control" id="direccion" autofocus="" placeholder="Calle" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>NÚMERO</p>
                        <input type="text" class="form-control" id="numero" autofocus="" placeholder="No." aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <div class="datos2">
                        <p>COLONIA</p>
                        <input type="text" class="form-control" id="colonia" autofocus="" placeholder="Colonia" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
                    </div>
                    <br><br><br>

                    <div class="datos3">
                    <p>AGREGA INSTRUCCIONES DE ENTREGA</p>
                        <input type="text" class="form-control" id="instrucciones" autofocus="" placeholder="Instrucciones" aria-required="true" aria-invalid="true" required="true" autocomplete="false">                                                
                    </div>                   
                    <br><br><br>
                  
                    <div class="line">
                        <p style="color:#76b227; font-weight:900; text-align:center; font-size:18px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                    </div>

                    <div class="datos4">
                        <div class="metodo">
                            <p>PAGO</p>
                            <button class="btn btn-success">Agregar método de pago</button>
                        </div>                        
                        <div class="checks"> 
                            <br><br>                                               
                            <input type="checkbox" name="tarjeta" id="tarjeta" value="1" />
                            <label class="form-check-label" for="conditions"><b>Tarjeta de crédito o débito</b></label>
                            <br>
                            <input type="checkbox" name="efectivo" id="efectivo" value="1" />
                            <label class="form-check-label" for="conditions"><b>Efectivo</b></label>
                        </div>
                    </div>
                                        
                    <br><br>                
                    <div class="confirmar">
                          <button class="btn btn-success">Confirmar Pedido</button>
                    </div>
                                    
            </div>
        
</div>

</body>