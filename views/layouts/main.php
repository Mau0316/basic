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
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/style.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="opciones">

        <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php"> INICIO</a>    
        <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Flogincontrol" id="repartir"> MESA DE CONTROL</a>    

        <?php
            Yii::$app->user->isGuest ? ($uno='1') : ($rol=Yii::$app->user->identity->rol);
            if (isset($rol)) 
            {
                $email=Yii::$app->user->identity->email;
                
                if($rol=='control') {                    
                    echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistausuarios">LISTA DE USUARIOS</a>';
                    echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistaespera">USUARIOS SEGUNDA HOLA</a>';
                }   
                echo     
                '<form action="'. Yii::$app->getUrlManager()->getBaseUrl().'/index.php?r=site%2Flogout" method="post">
                    <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">
                    <button id="close_session" class="btn btn-danger">SALIR ('.$email.')</button>
                </form>';         
            }
        ?>

    </div>

    
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>        
    


<footer class="footer">
    <div class="container">
        <p class="pull-left"><a href="http://aloha-mexico.com/" target="blank">www.aloha-mexico.com</a></p>

        <p class="pull-right"><a href="https://www.alohaspain.com/es/" target="blank">www.alohaspain.com</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
