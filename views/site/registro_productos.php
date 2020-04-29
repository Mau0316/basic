<?php

    /* @var $this yii\web\View */

    $this->title = 'Registro de productos';

    Yii::$app->user->isGuest ? ($uno='1') : ($rol=Yii::$app->user->identity->rol);
    if ($rol =! 'negocio') 
    {
        Yii::$app->controller->redirect(['index']);
    }
    if(Yii::$app->user->isGuest)
    {
        
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
                <button class="btn btn-secondary" type="button" id="actualizar" type="submit" name="actualizar">Actualizar</button>
            </div>
            <br><br>
        
            <div id="articulos">
                <?php		
                $res = \Yii::$app->db->createCommand(
                    'SELECT * FROM productos')->queryAll();
                $tamArticulos=count($res);
                $indicador=0;
                while ($indicador < $tamArticulos) 
                {
                if ($indicador== 0) 
                {
                    echo "<div class='articulo' id='div".$res[$indicador]['id']."'>";
                        echo "<input type='checkbox' name='elegidos[]' id='".$res[$indicador]['nombre']."' value='".$res[$indicador]['nombre']."'><br>";                  
                        echo "<input type='text' class='form-control' aria-required='true' aria-invalid='true' name='nombre[]' value='".$res[$indicador]['nombre']."'>";
                        echo "<img src=".Yii::$app->request->baseUrl."/".$res[$indicador]['img_ruta']." class='img_articulo'>";
                        echo "<input type='text' name='tipo_producto[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['tipo_producto']."' class='titulo_articulo'>";
                        echo "<input type='number' name='precio[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['precio']."' class='titulo_articulo'>";			
                        echo "<input type='text' name='palabra_busqueda[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['palabra_busqueda']."' class='titulo_articulo'>";
                        echo "<textarea class='titulo_articulo' rows='2' cols='20' name='esupdate[]'>".$res[$indicador]['empresa_id']."</textarea>";
                    echo "</div>";
                }          
                else
                {
                    if ($res[$indicador]['nombre'] != $res[$indicador-1]['nombre']) 
                    {
                        echo "<div class='articulo' id='div".$res[$indicador]['id']."'>";
                        echo "<input type='checkbox' name='elegidos[]' id='".$res[$indicador]['nombre']."' value='".$res[$indicador]['nombre']."'><br>";
                        echo "<input type='text' class='form-control' aria-required='true' aria-invalid='true' name='nombre[]' value='".$res[$indicador]['nombre']."'>";
                        echo "<img src=".Yii::$app->request->baseUrl."/".$res[$indicador]['img_ruta']." class='img_articulo'>";
                        echo "<input type='text' name='tipo_producto[]' class='form-control' aria-required='true' aria-invalid='true' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['tipo_producto']."' class='titulo_articulo'>";
                        echo "<input type='number' name='precio[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['precio']."' class='titulo_articulo'>";			
                        echo "<input type='text' name='palabra_busqueda[]' class='form-control' aria-required='true' aria-invalid='true' value='".$res[$indicador]['palabra_busqueda']."' class='titulo_articulo'>";
                        echo "<textarea class='titulo_articulo' rows='2' cols='20' name='esupdate[]'>".$res[$indicador]['empresa_id']."</textarea>";
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
	    txt1=txt1+"<input type='hidden' name='cont[]' value='' id='num"+cont+"'>";
	    txt1=txt1+"<input type='checkbox' name='elegidos' id='"+cont+"'>";
	    txt1=txt1+"<div id='art"+cont+"'></div><br>";
	    txt1=txt1+"<label for='articulo-"+cont+"'>Sube una foto</label>";
	    txt1=txt1+"<input type='file' name='img_ruta[]' accept='.jpg, .jpeg, .png' class='inputs_art' id='articulo-"+cont+"' onchange='cargarPreview(this.id);' multiple><br>";
	    txt1=txt1+"<input type='text' name='nombre[]' class='titulo_articulo' placeholder='Nombre del producto'><br><br>";
	    txt1=txt1+"<p class='txtprecio'>$</p><input type='number' name='precio[]' class='txtprecios' value='000'><br>";
        txt1=txt1+"<input type='text' name='tipo_producto[]' class='titulo_articulo' placeholder='Tipo del producto'><br><br>";

	    txt1=txt1+"<input type='text' name='palabra_busqueda[]' class='talla_articulo' placeholder='Palabra Busqueda'><br>";	    
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
<script  src="js/administrador.js"></script>

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

		$params = [':producto'=>$ids[$conta]];
		$arreglo = \Yii::$app->db->createCommand(
	        'DELETE FROM productos WHERE articulo=:producto',$params)->execute();

		//echo "<script>eliminarArticulo(".$ids[$conta].");</script>";
		$conta++;
	}
	Yii::$app->controller->redirect(['index']);
	}
	if (isset($_POST['guardar'])) 
	{
	$fecha=date("ymd");
	
    //guardar      
	$nombre=$_FILES['nombre'];
	$precio=$_POST['precio'];
	$precios=$_POST['tipo_producto'];
	$categorias=$_POST['img_ruta'];
	$palabra_busqueda=$_POST['palabra_busqueda'];		
	
	$tamArticulos=sizeof($precio);
	$aux=0;
	for ($i=0; $i < $tamArticulos; $i++) 
	{ 
		$arreglo = \Yii::$app->db->createCommand(
            'SELECT * FROM productos ORDER BY id DESC LIMIT 1')->queryAll();
		$numArticulo=$arreglo[0]['id']+1;
		$nombreArticulo=$numArticulo.date("dmy");
		$carpeta = "imagenes/articulos_prueba/".$nombreArticulo;
		if (!file_exists($carpeta)) {
		    mkdir($carpeta, 0777, true);
		}

		$j=0;

		while ($j < $contador[$i]) {
			$path = $_FILES['articulo']['name'][$aux];
			$ext = pathinfo($path, PATHINFO_EXTENSION);

			$carpeta = "imagenes/articulos_prueba/".$nombreArticulo;
			$carpeta = $carpeta ."/".$nombreArticulo. $aux .".". $ext;

			if(move_uploaded_file($_FILES['articulo']['tmp_name'][$aux], $carpeta)) 
			{
			 echo "Cambios Guardados con Éxito";
			}
			else
			{
				echo "<br>Ocurrió algo";
			}
			$j++;
			$aux++;
			$pa = [':nombre'=>$nombre,':precio'=>$precio[$i], ':tipo_producto'=>$tipo_producto[$i], ':img_ruta'=>$carpeta, ':palabra_busqueda'=>$palabra_busqueda[$i]];
        	$insrt = \Yii::$app->db->createCommand(
            	'INSERT INTO productos(nombre,precio,tipo_producto,img_ruta,palabra_busqueda) VALUES(:nombre,:precio,:tipo_producto,:img_ruta,:palabra_busqueda)',$pa)->execute();
        	Yii::$app->controller->redirect(['administrador']);
		}
	}
	Yii::$app->controller->redirect(['registro_productos']);
	}
	if (isset($_POST['actualizar'])) 
	{
	//update
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$tipo_producto=$_POST['tipo_producto'];
	$palabra_busqueda=$_POST['palabra_busqueda'];
	$tamupdate=sizeof($nombre);
	$fecha=date("ymd");
	
	for ($j=0; $j < $tamupdate; $j++) 
	{ 
		$param = [':nombre'=>$nombre[$j], ':precio'=>$precio[$j], ':tipo_producto'=>$tipo_producto[$j], ':palabra_busqueda'=>$palabra_busqueda[$j]];
		$arreglo = \Yii::$app->db->createCommand(
	        'UPDATE articulos SET nombre=:nombre, precio=:precio, tipo_producto=:tipo_producto, palabra_busqueda=:palabra_busqueda,  WHERE producto=:producto',$param)->execute();
	}
	Yii::$app->controller->redirect(['registro_productos']);
}
?>