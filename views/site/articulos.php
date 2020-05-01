<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Articulos';
if(Yii::$app->user->isGuest)
    {
        Yii::$app->controller->redirect(['index']);
	}
	else{
		$rol=Yii::$app->user->identity->rol;		
		if ($rol =! 'usuarios') 
		{
			Yii::$app->controller->redirect(['index']);
		}
	}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/lista.css">  
<?php
/*
if (Yii::$app->user->isGuest) {
    Yii::$app->controller->redirect(['index']);
}*/
    
      $params=[":id"=>$id];
      if ($id == null)
      {
        Yii::$app->controller->redirect(['lista']);
      }
      else{

        $empresaid = [':empresa_id'=>$empresaid];
      

      $consulta1 = Yii::$app->db->createCommand(
        'SELECT * FROM negocios WHERE id = :empresa_id',$empresaid)->queryAll();
        $tams=sizeof($consulta1);
        $cons=0;       
        while ($cons < $tams) 
        {        
            echo '<div class="articulos">' .
                '<p>'."Nombre del artículo".'</p>' .
                '<p>'.$consulta1[$cons]['nombre'].'</p>'.
                '<p>'."Precio".'</p>' .
                '<p>'.$consulta1[$cons]['precio'].'</p>'.
                '<p>'."Precio".'</p>' .
                '<p>'.$consulta1[$cons]['precio'].'</p>'.
                '<p>'."Precio".'</p>' .
                '<p>'.$consulta1[$cons]['precio'].'</p>'.
                '<p>'."Tipo de producto".'</p>' .
                '<p>'.$consulta1[$cons]['tipo_producto'].'</p>'.            
            '</div>';
        $cons++;
        }   
    }             
        
?>





<br><br><br>

<?php
$rol=Yii::$app->user->identity->rol;
echo $rol . ' Hlola';
?>


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