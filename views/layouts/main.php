<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<header>

    <div class="navegacion">

        <div class="imagenes">

            <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/LOGO.svg" alt="Operativo Escudo">                
         
            
        </div>
             
        
        <div class="opciones">
            <!--
            <a class="busqueda">            
                     <input type="text" placeholder="Buscar">
                     <button class="btn btn-primary" type="submit" id="a">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </a>
            -->  

            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Floginusuarios" id="comprar">QUIERO COMPRAR</a>
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Floginnegocios" id="vender">QUIERO VENDER</a>
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Flogin" id="repartir"> QUIERO REPARTIR</a>
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Flogincontrol" id="repartir"> MESA DE CONTROL</a>

        </div> 

    </div>            

    <!--Etiqueta nav sirve para navegación-->
    <nav>        
        <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php">INICIO</a>
        <a href="#">¿QUÉ ES?</a>
        <a href="#">¿CÓMO FUNCIONA?</a>
        <a href="#">PREGUNTAS FRECUENTES</a>        
        <a href="#">RECOMENDACIONES</a>
        <?php
        Yii::$app->user->isGuest ? ($uno='1') : ($rol=Yii::$app->user->identity->rol);        
        if (isset($rol)) 
        {
            $email=Yii::$app->user->identity->email;
            echo     
            '<form action="'. Yii::$app->getUrlManager()->getBaseUrl().'/index.php?r=site%2Flogout" method="post">
                <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">                    
                <button id="close_session">SALIR ('.$email.')</button>
            </form>';
            if ($rol == 'aspirantes') 
            {                
                echo '<a href="#">PEDIDOS POR ENTREGAR</a>';
            }
            if($rol == 'usuarios')
            {
                echo '<br>';               
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Fbusquedaempresa">LEVANTAR PEDIDO</a>';
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Fcarrito">
                <button class="btn btn-info" type="submit">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                </button> </a>';
                
            }
            if($rol == 'negocios')
            {  
                echo '<br>' ;
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Fregistroproductos">REGISTRAR PRODUCTOS</a>';
            }
            if($rol == 'control')
            {   
                echo '<br>';
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistanegocios">LISTA DE NEGOCIOS</a>';
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flista">LISTA DE UNIDADES DE REPARTO</a>';
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistapedidos">LISTA DE PEDIDOS</a>';
            }
        }
        ?>
            
    </nav>

</header>




<body>
<?php $this->beginBody() ?>



    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>



    <div class="father">
                
            <div class="redes">
                <div class=adicionales>
                    <p class="informacion">Síguenos</p>
                    <p class="lineas1">______________________________________</p>
                </div>
                <div class= "fb">
                        <a href="http://facebook.com" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/facebook.svg" alt="" width="30px"></a>
                        <br><br>
                    </div>

                    <div class="wa">
                        <a href="https://api.whatsapp.com/send?phone=+527713430047" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/whatsapp.svg" alt="" width="30px"></a>
                        <br><br>
                    </div>

                    <div class="tw">
                        <a href="https://twitter.com/gobiernohidalgo" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/twitter.svg" alt="" width="30px"></a>
                        <br><br>
                    </div>

                    <div class="ig">
                        <a href="https://www.instagram.com/omarfayadmeneses/?hl=es-la" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/instagram.svg" alt="" width="30px"></a>
                    </div>                
                </div>
                    
                <div class="contacto">
                    <p class="informacion1">Contacto</p>
                    <p class="lineas">______________________________________</p>
                    <p class="contacto2">Tuxtepec 100
                                        <br>
                                        42080 Pachuca De Soto
                                        <br>
                                        Hidalgo, México</p>       
                </div>

                <div class="msg">
                    <a href="#  "><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/messenger.svg" alt="" width="60px"></a>
                </div>
                

          
            
    </div>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

