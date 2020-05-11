<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'A Domicilio';

?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/principal.css">  
<body>
    
    <div class="pasos">
        
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/paso-01.svg" alt="Paso 1">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/paso-02.svg" alt="Paso 2">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/paso-03.svg" alt="Paso 3">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/paso-04.svg" alt="Paso 4">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/paso-05.svg" alt="Paso 5">
        
    </div>
    
    <div class="categorias">

        <h1 class="title">CATEGORÍAS</h1>
        <p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>                    
        <a title="ALIMENTOS PREPARADOS" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/ALIMENTOS.svg" alt="Alimentos Preparados"></a>
        <a title="DESPENSA" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/DESPENSA.svg" alt="Despensa"></a>
        <a title="SALUD" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/SALUD.svg" alt="Salud"></a>
        <a title="SOMOS HIDALGO" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Somos Hidalgo"></a>
        <br>
        <a title="NIÑOS" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/NINOS.svg" alt="Niños"></a>
        <a title="MASCOTAS" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/MASCOTAS.svg" alt="Mascotas"></a>
        <a title="SERVICIOS" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/SERVICIOS.svg" alt="Servicios"></a>
        <a title="OTROS" href="#"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/OTROS.svg" alt="Otros"></a>
        
    </div>

    <div class="economia">

        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/adomicilio-01.jpg" alt="Operativo Escudo" id="operativo">

    </div>

    <div class="preguntas">
    
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">¿QUÉ ES?</a><br>
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">¿CÓMO FUNCIONA?</a><br>
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">PREGUNTAS FRECUENTES</a><br>
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">RECOMENDACIONES</a><br>

    </div>


</body>