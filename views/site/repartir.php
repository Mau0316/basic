<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Detalles';
$id = $_REQUEST['id'];

?>


<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/carrito.css"> 
<body>
    <h1 id="title">Detalle de compra</h1>
    <p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>

</body>



<?php
if (isset($_POST['eliminar'])) 
{
        $ids=$_POST['idart'];        
        $paramst = [':id'=>$ids];
		$arreglo = \Yii::$app->db->createCommand(
	        'DELETE FROM cart_items WHERE id=:id',$paramst)->execute();
}
 
 
// select products in the cart
$paramst = [':userid'=>$id];
$query = \Yii::$app->db->createCommand(
"SELECT p.id, p.nombre, p.precio, p.img_ruta, ci.cantidad, ci.user_id, ci.id,ci.cantidad * p.precio AS subtotal

    FROM cart_items ci LEFT JOIN productos p ON ci.product_id = p.id WHERE ci.user_id = :userid",$paramst)->queryAll(); 
 
    $tamArticulos=count($query);
    $indicador=0;
    
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
         
        echo "<tr>";
            echo "<th>Nombre del producto</th>";
            echo "<th>Imagen</th>";
            echo "<th>Precio</th>";        
                echo "<th style='width:15em;'>Cantidad</th>";
                echo "<th>Sub Total</th>";
                
        echo "</tr>";
         
        $total=0; 
     
        while( $indicador < $tamArticulos){        
        
            echo "<tr>";

                echo "<td>";                                        
                    echo "<div class='product-name'>".$query[$indicador]['nombre']."</div>";
                echo "</td>";

                echo "<td>" . 
                    "<img src=".Yii::$app->request->baseUrl."/".$query[$indicador]['img_ruta']." id='img_articulo' width='100px'>" .
                "</td>";

                echo "<td>&#36;" . number_format($query[$indicador]['precio'], 2, '.', ',') . "</td>";
                
                echo "<td>";                                    
                        echo "<p id='cantidad'>".$query[$indicador]['cantidad']."</p>";
                echo "</td>";

                echo "<td>&#36;" . number_format($query[$indicador]['subtotal'], 2, '.', ',') . "</td>";
                /*
                echo "<td>";
                    echo "<form method='post' enctype='multipart/form-data'>" ;
                        echo "<input type='hidden' name='_csrf' value=".Yii::$app->request->getCsrfToken().">" ;
                        echo "<input type='hidden' name='idart' value=".$query[$indicador]['id'].">" ;
                        echo "<button class='btn btn-danger' type='submit' name='eliminar' type='button'>Eliminar Artículo</button>";
                    echo "</form>";
                echo "</td>";
                */

            echo "</tr>";
        
            $total += $query[$indicador]['subtotal'];

            $indicador++;
        }
         
            echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>&#36;" . number_format($total, 2, '.', ',') . "</td>";               
            echo "</tr>";

    echo "</table>"; 
?>