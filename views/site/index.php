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
        <a title="ALIMENTOS PREPARADOS" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1"></a>
        <a title="DESPENSA" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 2"></a>
        <a title="SALUD" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 3"></a>
        <a title="SOMOS HIDALGO" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 4"></a>
        <br>
        <a title="NIÑOS" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 5"></a>
        <a title="MASCOTAS" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 6"></a>
        <a title="SERVICIOS" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 7"></a>
        <a title="OTROS" href="http://www.google.com"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 8"></a>
        
    </div>

    <div class="economia">

        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/escudo-01.svg" alt="Operativo Escudo" id="operativo">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Economía">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/susana-distancia-01.svg" alt="Revisión sanitaria" id="susana">

    </div>

    <div class="preguntas">
    
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">¿QUÉ ES?</a><br>
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">¿CÓMO FUNCIONA?</a><br>
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">PREGUNTAS FRECUENTES</a><br>
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/buscar-01.svg" alt="Lupa"><a href="#">RECOMENDACIONES</a><br>

    </div>


</body>