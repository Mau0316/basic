<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Articulos';
$id=Yii::$app->user->identity->id;
$created=date('Y-m-d H:i:s');
/*
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
	}*/

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/articulos.css">  

<script type = "text/javascript">

function mensaje(num){    
                                    
        var product_id = document.getElementsByClassName("product_id")[num].value;
        var empresa = document.getElementsByClassName("empresa")[num].value;
        var cantidad = document.getElementsByClassName("cantidad")[num].value;
        var user_id = document.getElementsByClassName("user_id")[num].value;
        var created = document.getElementsByClassName("created")[num].value;        
        //alert(product_id);
             
            var parametros = {
                    "product_id" : product_id,
                    "empresa" : empresa,
                    "cantidad" : cantidad,
                    "user_id" : user_id,
                    "created" : created                                        
                };

                $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/carro') ?>',
                        type:  'post',
                        beforeSend: function () {
                        },
                        success:  function (response) {
                if (response){                                        
                    Swal.fire({
                        icon: 'success',
                        title: 'Pedido agregado al carrito',
                        showClass: {
                            popup: 'animated fadeInDown faster'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp faster'
                        }
                        })                       
                }        
                else{                                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Ha ocurrido un error con el servidor',
                        showClass: {
                            popup: 'animated fadeInDown faster'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp faster'
                        }
                        })
                        return false;
                }
                
                        }//Cierre respuesta de procesa miento de datos
                });//Cierre funcion ajax

}

</script>

<body>
    
<h1>Artículos</h1>
<?php
 $paramst = [':empresaid'=>$empresaid];
$cn = \Yii::$app->db->createCommand(
                    'SELECT * FROM productos WHERE empresa_id = :empresaid',$paramst)->queryAll();
                    

                    $tamNegocios=count($cn);
                    $indicador=0;                
                    $numart=0;    
                    while ($indicador < $tamNegocios) 
                    {                                                        
                        echo                            
                                "<div class='producto'>". 
                                        "<input type='hidden' name='_csrf' value='5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA=='>" .
                                        "<input type='hidden' class='user_id' value=".$id.">" .
                                        "<input type='hidden' class='empresa' value=".$empresaid.">" .
                                        "<input type='hidden' class='created' value=".$created.">" .
                                        "<input type='hidden' class='product_id' value=".$cn[$indicador]['id'].">" .
                                        "<img src=".Yii::$app->request->baseUrl."/".$cn[$indicador]['img_ruta']." id='img_articulo'>" .
                                        "<p class='titulo'>NOMBRE DEL PRODUCTO</p>" .
                                        "<p class='dato'>".$cn[$indicador]['nombre']."</p>".
                                        "<p class='titulo'>PRECIO</p>" .
                                        "<p class='dato'>".$cn[$indicador]['precio']."</p>".
                                        "<p class='titulo'>TIPO DE PRODUCTO</p>" .
                                        "<p class='dato'>".$cn[$indicador]['tipo_producto']."</p>".
                                        "<p class='titulo'>CANTIDAD</p>" .
                                        "<div class='agregar'>" .
                                            "<input type='number' class='cantidad' name='cantidad' value='1' class='form-control' />".
                                            "<button id='".$numart."' class='btn btn-primary add-to-cart' type='button' onClick='mensaje(this.id)'>" .
                                                "<span class='glyphicon glyphicon-shopping-cart'></span>Añadir" .
                                            "</button>". 
                                        '</div>' .
                                                                       
                                "</div>" ;
                $numart++;
                $indicador++;
                $limite = $indicador;
            }

                
?>

</body>
