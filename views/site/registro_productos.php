<?php

    /* @var $this yii\web\View */

    $this->title = 'Registro de productos';

    
    if(Yii::$app->user->isGuest)
    {
        Yii::$app->controller->redirect(['index']);
	}
	else{
		$rol=Yii::$app->user->identity->rol;
		$empresaid=Yii::$app->user->identity->userid;
		if ($rol =! 'negocio') 
		{
			Yii::$app->controller->redirect(['index']);
		}
	}

?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl; ?>/css/registro_productos.css">


    <div id="control">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
            
            <div class="panel">
                <button class="btn btn-success" onclick="agregarArticulo();" type="button">Nuevo Artículo</button>
                <button class="btn btn-danger" type="submit" name="eliminar" type="button">Eliminar Artículo</button>
                <button class="btn btn-primary" type="submit" name="guardar">Guardar</button>
				<button class="btn btn-secondary" type="submit" type="submit" name="actualizar">Actualizar</button>				
            </div>
            <br><br>
        
            <div id="articulos">
				<?php		
				$params=[":empresaid"=>$empresaid];
                $res = \Yii::$app->db->createCommand(
                    'SELECT * FROM productos WHERE empresa_id =:empresaid',$params)->queryAll();
                $tamArticulos=count($res);
                $indicador=0;
                while ($indicador < $tamArticulos) 
                {
					if ($indicador== 0) 
					{
						echo "<div class='articulo' id='div".$res[$indicador]['nombre']."'>";
							echo "<input type='hidden' name='ruta[]' value='".$res[$indicador]['ruta']."'>";
							echo "<input type='checkbox' name='elegidos[]' id='".$res[$indicador]['ruta']."' value='".$res[$indicador]['ruta']."'>";
							echo "<input type='text' class='form-control' aria-required='true' aria-invalid='true' name='nombre[]' value='".$res[$indicador]['nombre']."'>";
							echo "<img src=".Yii::$app->request->baseUrl."/".$res[$indicador]['img_ruta']." class='img_articulo'>";
							echo "<input type='text' name='tipo_producto[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['tipo_producto']."' class='titulo_articulo'>";
							echo "<input type='number' name='precio[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['precio']."' class='titulo_articulo'>";			
							echo "<input type='text' name='palabra_busqueda[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['palabra_busqueda']."' class='titulo_articulo'>";
							echo "<input type='hidden' name='esupdate[]' value='".$empresaid."' class='titulo_articulo'>";
						echo "</div>";
					}          
                else
                {
                    if ($res[$indicador]['nombre'] != $res[$indicador-1]['nombre']) 
                    {
						echo "<div class='articulo' id='div".$res[$indicador]['id']."'>";
						echo "<input type='hidden' name='ruta[]' value='".$res[$indicador]['ruta']."'>";
                        echo "<input type='checkbox' name='elegidos[]' id='".$res[$indicador]['ruta']."' value='".$res[$indicador]['ruta']."'>";
                        echo "<input type='text' class='form-control' aria-required='true' aria-invalid='true' name='nombre[]' value='".$res[$indicador]['nombre']."'>";
                        echo "<img src=".Yii::$app->request->baseUrl."/".$res[$indicador]['img_ruta']." class='img_articulo'>";
                        echo "<input type='text' name='tipo_producto[]' class='form-control' aria-required='true' aria-invalid='true' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['tipo_producto']."' class='titulo_articulo'>";
                        echo "<input type='number' name='precio[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['precio']."' class='titulo_articulo'>";			
                        echo "<input type='text' name='palabra_busqueda[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['palabra_busqueda']."' class='titulo_articulo'>";
                        echo "<input type='hidden' name='esupdate[]' value='".$empresaid."' class='titulo_articulo'>";
                        echo "</div>";
                    }
                }          
                $indicador++;
                }
                ?>
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script>
	var cont=1;
	function agregarArticulo()
	{
	    var txt1 = "<div class='articulos' id='div"+cont+"'>";
	    txt1=txt1+"<input type='hidden' name='_csrf' value='<?=Yii::$app->request->getCsrfToken()?>'>";
	    txt1=txt1+"<input type='hidden' name='contcreate[]' value='' id='num"+cont+"'>";
	    txt1=txt1+"<input type='checkbox' name='elegidos' id='"+cont+"'>";
	    txt1=txt1+"<div id='art"+cont+"'></div><br>";
	    txt1=txt1+"<label for='articulo-"+cont+"'>Sube una foto</label>";
	    txt1=txt1+"<input type='file' name='img_rutacreate[]' accept='.jpg, .jpeg, .png' class='inputs_art' id='articulo-"+cont+"' onchange='cargarPreview(this.id);' multiple><br>";
		txt1=txt1+"<br>";
		txt1=txt1+"<b><p>Nombre del producto</p></b>";
		txt1=txt1+"<input type='text' name='nombrecreate[]' placeholder='Nombre del producto'><br><br>";	    
	    txt1=txt1+"<b><p>Precio</p></b>";
		txt1=txt1+"<p class='txtprecio'>$</p><input type='number' name='preciocreate[]' class='txtprecios' value='000'><br>";
        txt1=txt1+"<b><p>Tipo de producto</p></b>";
		txt1=txt1+"<input type='text' name='tipo_productocreate[]' placeholder='Tipo del producto'><br><br>";
		txt1=txt1+"<b><p>Palabra de búsqueda</p></b>";
		txt1=txt1+"<input type='text' name='palabra_busquedacreate[]' placeholder='Palabra Busqueda'><br>";
		txt1=txt1+"<br>";
	    txt1=txt1+'<button class="botones" type="button" onclick="eliminarArticulo(this.id);"  id="div'+cont+'">Eliminar Vacío</button>';
	    txt1=txt1+"</div>";
	    $("#articulos").append(txt1);
	    cont++;
	}
	function eliminarArticulo(id)
	{
		//var id;
	  //$("input:checkbox:checked").each(function() {
	    //   id = $(this).attr("id");
	       $("#"+id).remove();
	  //});
	}
</script>
<script  src="js/productos.js"></script>

<?php
	if (isset($_POST['eliminar'])) 
	{
	$ids=$_POST['elegidos'];
	$tamIds=sizeof($ids);
	$conta=0;
	while ($conta < $tamIds) 
	{
		
		$mis_fotos = "imagenes/articulos_prueba/".$ids[$conta];// Carpeta que contine archivos y queremos eliminar
		foreach(glob($mis_fotos."/*.*") as $archivos_carpeta)  
		{  
			unlink($archivos_carpeta);//Eliminamos todos los archivos de la carpeta hasta dejarla vacia  
		}  
		rmdir($mis_fotos);//Eliminamos la carpeta vacia

		$params = [':img_ruta'=>$ids[$conta]];
		$arreglo = \Yii::$app->db->createCommand(
	        'DELETE FROM productos WHERE ruta=:img_ruta',$params)->execute();

		//echo "<script>eliminarArticulo(".$ids[$conta].");</script>";
		$conta++;
	}
	Yii::$app->controller->redirect(['registroproductos']);
	}
	if (isset($_POST['guardar'])) 
	{
	$fecha=date("ymd");
	
	//guardar      
	$nombre=$_POST['nombrecreate'];	
	$precio=$_POST['preciocreate'];
	$tipo_producto=$_POST['tipo_productocreate'];
	$img_ruta=$_FILES['img_rutacreate'];	
	$palabra_busqueda=$_POST['palabra_busquedacreate'];		
	$contador = $_POST['contcreate'];
	
	
	
		
	$tamArticulos=sizeof($nombre);
	$aux=0;
	for ($i=0; $i < $tamArticulos; $i++) 
	{ 
		$arreglo = \Yii::$app->db->createCommand(
			'SELECT * FROM productos ORDER BY id DESC LIMIT 1')->queryAll();
		if(!$arreglo){
			$arrID=0;
		}
		else{
			$arrID=$arreglo[0]['id'];
		}
		$numArticulo=$arrID+1;
		$nombreArticulo=$numArticulo.date("dmy");
		$carpeta = "imagenes/articulos_prueba/".$nombreArticulo;
		if (!file_exists($carpeta)) {
		    mkdir($carpeta, 0777, true);
		}

		$j=0;

		while ($j < $contador[$i]) {
			$path = $_FILES['img_rutacreate']['name'][$aux];
			$ext = pathinfo($path, PATHINFO_EXTENSION);

			$carpeta = "imagenes/articulos_prueba/".$nombreArticulo;
			$carpeta = $carpeta ."/".$nombreArticulo. $aux .".". $ext;

			if(move_uploaded_file($_FILES['img_rutacreate']['tmp_name'][$aux], $carpeta)) 
			{
			 echo "Cambios Guardados con Éxito";
			}
			else
			{
				echo "<br>Ocurrió algo";
			}
			$j++;
			$aux++;
			$pa = [':nombre'=>$nombre[$i],':precio'=>$precio[$i], ':tipo_producto'=>$tipo_producto[$i], ':img_ruta'=>$carpeta, ':ruta'=>$nombreArticulo, ':palabra_busqueda'=>$palabra_busqueda[$i], ':empresa_id'=>$empresaid];
        	$insrt = Yii::$app->db->createCommand(
            	'INSERT INTO productos(nombre,precio,tipo_producto,img_ruta,ruta,palabra_busqueda,empresa_id) VALUES(:nombre,:precio,:tipo_producto,:img_ruta,:ruta,:palabra_busqueda, :empresa_id)',$pa)->execute();
        	Yii::$app->controller->redirect(['registroproductos']);
		}
	}
	Yii::$app->controller->redirect(['registroproductos']);
	}
	
	
	if (isset($_POST['actualizar'])) 
	{
	//update
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$tipo_producto=$_POST['tipo_producto'];
	$palabra_busqueda=$_POST['palabra_busqueda'];
	$ruta=$_POST['ruta'];
	$tamupdate=sizeof($nombre);
	$fecha=date("ymd");
	
	for ($j=0; $j < $tamupdate; $j++) 
	{ 
		$param = [':nombre'=>$nombre[$j], ':precio'=>$precio[$j], ':tipo_producto'=>$tipo_producto[$j], ':palabra_busqueda'=>$palabra_busqueda[$j], ':ruta'=>$ruta[$j]];
		$arreglo = \Yii::$app->db->createCommand(
	        'UPDATE productos SET nombre=:nombre, precio=:precio, tipo_producto=:tipo_producto, palabra_busqueda=:palabra_busqueda  WHERE ruta=:ruta',$param)->execute();
	}
	Yii::$app->controller->redirect(['registroproductos']);
}
?>