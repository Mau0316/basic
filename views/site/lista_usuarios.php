<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Lista de usuarios';
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
<h1>Lista de usuarios</h1>
<div id="contenedor1">
<table id="tabla">
		<tr>
		    <th>Id</th>
		    <th>Nombre Usuario</th>
		    <th>Apellido Paterno</th>
		    <th>Apellido Materno</th>
		    <th>Celular</th>
		    <th>Email</th>
		    <th>Dirección</th>
            <th>Colonia</th>            
            <th>Modificar</th>
            
  		</tr>
<?php
    foreach ($usuarios as $usuario):?>
	  	<tr>
        <th><?= Html::encode("{$usuario->id}") ?></th>
        <th><?= Html::encode("{$usuario->nombre}") ?></th>
        <th><?= Html::encode("{$usuario->a_paterno}") ?></th>
        <th><?= Html::encode("{$usuario->a_materno}") ?></th>
        <th><?= Html::encode("{$usuario->celular}") ?></th>
        <th><?= Html::encode("{$usuario->email}") ?></th>
        <th><?= Html::encode("{$usuario->direccion}") ?></th>
        <th><?= Html::encode("{$usuario->colonia}") ?></th>        
            <form method="post" action="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/index.php?r=site%2Fmodificarusuario">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
            <input type="text" id="dato" name="id" value="<?php echo $usuario->id ?>">
            <th><button type="submit" class="btn" name="modificarusuario">Modificar</button></th>
			</form>
		</tr>
<?php endforeach; ?>
</table></div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


