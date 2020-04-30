<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Articulos';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/lista.css">  
<?php
/*
if (Yii::$app->user->isGuest) {
    Yii::$app->controller->redirect(['index']);
}*/
?><br><br><br>

<h1>Artículos</h1>
<div id="contenedor1">
            <table id="tabla">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tipo de producto</th>
                        <th>Imagen</th>
                        <th>Palabra de busqueda</th>                        
                        <th>Agregar al carrito</th>            
                    </tr>
            <?php
                foreach ($articulos as $articulo):?>
                    <tr>                                            
                    <th><?= Html::encode("{$articulo->id}") ?></th>
                    <th><?= Html::encode("{$articulo->nombre}") ?></th>
                    <th><?= Html::encode("{$articulo->precio}") ?></th>
                    <th><?= Html::encode("{$articulo->tipo_producto}") ?></th>
                    <th><?= Html::encode("{$articulo->img_ruta}") ?></th>                    
                    <th><?= Html::encode("{$articulo->palabra_busqueda}") ?></th>                           
                        <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fmodificarnegocio">
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
                        <input type="text" id="dato" name="id" value="<?php echo $articulo->id ?>">
                        <th><button type="submit" class="btn" name="modificarnegocio">Modificar</button></th>
                        </form>
                    </tr>
            <?php endforeach; ?>
            </table>

</div>




<?= LinkPager::widget(['pagination' => $pagination]) ?>