<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrate';


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/proveedor.css">  
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<body>

            <div class="categoria">    
                <p>CATEGORÍAS ALIMENTOS PREPARADOS</p>
            </div>

            <h1 class="title">PERFÍL DEL PROVEEDOR</h1>

        <div class="padre">
            
            <div class="menu">
                
                <div class="imagen">
                    <img src="https://cdn2.melodijolola.com/media/files/styles/nota_imagen/public/field/image/chilaquiles-rojos.jpg" alt="">
                </div>

                <div class="info">
                   <div class="titulo">
                       <label for="">Nombre comercial: </label>                       
                   </div>
                   <div class="dato">
                    <p>La estancia</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Número celular para pedidos</label>                       
                   </div>
                   <div class="dato">
                       <p>7712345678</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Horario: </label>                       
                   </div>
                   <div class="dato">
                    <p>10am a 5pm</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Servicio a domicilio:</label>                       
                   </div>
                   <div class="dato">
                       <p>Sí</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Factura:</label>                       
                   </div>
                   <div class="dato">
                       <p>Sí</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Pago con tarjeta:</label>                       
                   </div>
                   <div class="dato">
                       <p>Sí</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Medidas sanitarias:</label>                       
                   </div>
                   <div class="dato">
                       <p>Sí</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Giro comercial:</label>                       
                   </div>
                   <div class="dato">
                       <p>Restaurant</p>
                   </div>
                   <br>
                   <div class="titulo">
                       <label for="">Dirección:</label>                       
                   </div>
                   <div class="dato">
                       <p>Pachuca, Col. Centro #234 esq</p>
                   </div>
                   <br>

                </div>
                        
            </div>        
    
        </div>

        <div class="pedidos">
            
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 1</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 2</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 3</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>     
            <br>       
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 4</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 4</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 6</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>
            <br>
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 7</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 8</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Producto 9</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Agregar al <br> pedido</button>
                </div>              
            </div>
            
           
            
            
        </div>

</body>