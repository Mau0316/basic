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

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Quiero vender', 'url' => ['/site/index']],
            ['label' => 'Quiero repartir', 'url' => ['/site/about']],
            ['label' => 'Registrarme', 'url' => ['/site/register']],
            /*
            ['label' => 'Contact', 'url' => ['/site/contact']],*/
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesión', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Cerrar Sesión (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>



    <div class="father">
    
            <div class="hidalgo">

                <img src="../img/hidalgo-01.svg" alt="" style="width: 40%;">

            </div>

            <div class="redes">
                <p class="informacion">Síguenos</p>
                <p class="lineas">- - - - - - - - - - - - - - - - - - - - - - - - -</p>
                
                <a href="http://facebook.com" target="blank"><img src="../img/facebook.svg" alt="" width="25px"></a>
                <br>
                <a href="https://api.whatsapp.com/send?phone=+527713430047" target="blank"><img src="../img/whatsapp.svg" alt="" width="25px"></a>
                <br>
                <a href="https://twitter.com/gobiernohidalgo" target="blank"><img src="../img/twitter.svg" alt="" width="25px"></a>
                <br>
                <a href="https://www.instagram.com/omarfayadmeneses/?hl=es-la" target="blank"><img src="../img/instagram.svg" alt="" width="25px"></a>
                
            </div>
        
            <div class="escudo">
                <img src="../img/escudo.png" alt="">
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
        
    </div>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
