<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Lista de Pedidos';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/lista.css">  
<?php
/*
if (Yii::$app->user->isGuest) {
    Yii::$app->controller->redirect(['index']);
}*/
?><br><br><br>
<!--
    <form method="post">
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
    <input type="search" name="caracteres">
    <label>Busqueda por: </label>
    <select id="tipo" name="tipo">
        <option value="num_cotizacion">No. de cotizacion</option>
        <option value="nomb_comercial">Nombre Empresa</option>
        <option value="servicio">Servicio</option>
        <option value="fecha">Fecha</option>
        <option value="rfc">RFC</option>
        <option value="representante">Representante</option>
        <option value="marca">Marca</option>
    </select>
    <button type="submit" name="buscar" id="buscar">Buscar</button><br>
    </form>
-->
<h1>Lista de pedidos</h1>
<div id="contenedor1">
<table id="tabla">
		<tr>
		    <th>Id</th>
		    <th>Nombre de quien recibe</th>
		    <th>Teléfono</th>
		    <th>Calle</th>
		    <th>Número</th>
		    <th>Colonia</th>
		    <th>Municipio</th>
            <th>Pago</th>
            <th>Id de usuario</th>
            <th>Modificar</th>
            
  		</tr>
<?php
    foreach ($pedidos as $pedido):?>
	  	<tr>
        <th><?= Html::encode("{$pedido->id}") ?></th>
        <th><?= Html::encode("{$pedido->nombre}") ?></th>
        <th><?= Html::encode("{$pedido->telefono}") ?></th>
        <th><?= Html::encode("{$pedido->calle}") ?></th>
        <th><?= Html::encode("{$pedido->num}") ?></th>
        <th><?= Html::encode("{$pedido->colonia}") ?></th>
        <th><?= Html::encode("{$pedido->municipio}") ?></th>
        <th><?= Html::encode("{$pedido->pago}") ?></th>
        <th><?= Html::encode("{$pedido->user_id}") ?></th>
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fdetalles">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
            <input type="text" id="dato" name="id" value="<?php echo $pedido->id ?>">
            <th><button type="submit" class="btn" name="detalles">Ver más detalles</button></th>
			</form>
		</tr>
<?php endforeach; ?>
</table></div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


