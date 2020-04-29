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
    <link rel="icon" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/operativo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/style.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<header>

    <div class="navegacion">

        <div class="imagenes">

            <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/escudo-01.svg" alt="Operativo Escudo">                
            <p class="domicilio" >a domicilio </p>
            <p class="hgo"> hidalgo</p>     
            
        </div>
             
        <div class="opciones">

            <div class="input-group-btn">            
            <input type="text" placeholder="Buscar">
                <button class="btn btn-primary" type="submit" id="buscar">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>            
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Floginusuarios" id="comprar">QUIERO COMPRAR</a>
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Floginnegocios" id="vender">QUIERO VENDER</a>
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Flogin" id="repartir"> QUIERO REPARTIR</a>             

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
            echo     
            '<form action="'. Yii::$app->getUrlManager()->getBaseUrl().'/index.php?r=site%2Flogout" method="post">
                <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">                    
                <button id="close_session">SALIR</button>
            </form>';
            if ($rol == 'aspirantes') 
            {
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flista">LISTA DE ASPIRANTES</a>';
                echo '<a href="#">PEDIDOS POR ENTREGAR</a>';
            }
            if($rol == 'usuarios')
            {
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistausuarios">LISTA DE USUARIOS</a>';
                echo '<a href="#">PEDIDOS REALIZADOS</a>';
            }
            if($rol == 'negocios')
            {                
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistanegocios">LISTA DE NEGOCIOS</a>';
                echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Fregistroproductos">REGISTRAR PRODUCTOS</a>';
            }
        }
        ?>
            

        <!-- Repartidor:  Salir y lista y su propia vista-->

        <!-- Negocios:  Salir, lista para pedidos -->

        <!-- Usuarios:  Salir y lista de pedidos realizados-->

        <!-- Mesa de control: Listas modificar -->
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
    
            <div class="hidalgo">

                <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/hidalgo-01.svg" alt="" style="width: 40%;">

            </div>

            <div class="redes">
                <p class="informacion">Síguenos</p>
                <p class="lineas">- - - - - - - - - - - - - - - - - - - - - - - - -</p>
                
                <a href="http://facebook.com" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/facebook.svg" alt="" width="25px"></a>
                <br><br>
                <a href="https://api.whatsapp.com/send?phone=+527713430047" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/whatsapp.svg" alt="" width="25px"></a>
                <br><br>
                <a href="https://twitter.com/gobiernohidalgo" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/twitter.svg" alt="" width="25px"></a>
                <br><br>
                <a href="https://www.instagram.com/omarfayadmeneses/?hl=es-la" target="blank"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/instagram.svg" alt="" width="25px"></a>
                
            </div>
        
            <div class="escudo">
                <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/escudo.png" alt="">
            </div>
                
            <div class="contacto">
                <p class="informacion">Contacto</p>
                <p class="lineas">- - - - - - - - - - - - - - - - - - - - - - - - -</p>
                <p class="contacto">Plaza Juárez s/n Col. Centro</p> <br>
                <p class="contacto">Pachuca de Soto, Hidalgo, <br> México </p> <br>
                <a href="tel:+527717176000">(771) 71 76000</a> <br>
                <p class="contacto">Web Master</p> <br>
                <a href="mailto:webhgo@hidalgo.gob.mx" target="blank">webhgo@hidalgo.gob.mx</a> <br>
                <a href="#">Aviso de privacidad</a> <br>
            </div>

            <div class="messenger">
                <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/messenger.svg" alt="">
            </div>
        
    </div>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

