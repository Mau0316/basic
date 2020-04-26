<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Lista de negocios';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/lista.css">  
<?php
/*
if (Yii::$app->user->isGuest) {
    Yii::$app->controller->redirect(['index']);
}*/
?><br><br><br>
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
<h1>Lista de negocios</h1>
<div id="contenedor1">
<table id="tabla">
		<tr>
		    <th>Id</th>
		    <th>Nombre Comercio</th>
		    <th>Nombre del Titular</th>
		    <th>Correo</th>
		    <th>Dirección</th>
		    <th>Giro</th>
		    <th>Búsqueda</th>
            <th>Celular</th>
            <th>Validación</th>
            <th>Modificar</th>
            
  		</tr>
<?php
    foreach ($negocios as $negocio):?>
	  	<tr>
        <th><?= Html::encode("{$negocio->id}") ?></th>
        <th><?= Html::encode("{$negocio->nombre_comercio}") ?></th>
        <th><?= Html::encode("{$negocio->nombre_titular}") ?></th>
        <th><?= Html::encode("{$negocio->email}") ?></th>
        <th><?= Html::encode("{$negocio->direccion}") ?></th>
        <th><?= Html::encode("{$negocio->giro}") ?></th>
        <th><?= Html::encode("{$negocio->busqueda}") ?></th>
        <th><?= Html::encode("{$negocio->celular}") ?></th>
        <th><?= Html::encode("{$negocio->validacion}") ?></th>
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fmodificarnegocio">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
            <input type="text" id="dato" name="id" value="<?php echo $negocio->id ?>">
            <th><button type="submit" class="btn" name="modificarnegocio">Modificar</button></th>
			</form>
		</tr>
<?php endforeach; ?>
</table></div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


