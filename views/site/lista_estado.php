<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Lista por estado dependiendo el administrador';
$franquicia=Yii::$app->user->identity->franquicia;

?>


<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/carrito.css"> 
<body>
    <h1 id="title">Lista de usuarios por el lugar de administrador</h1>
    <p style="color:#76b227; font-weight:900; text-align:center; font-size:20px">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>


</body>

<?php

// select products in the cart
$paramst = [':userid'=>$id, ':vacio' => ''];
$query = \Yii::$app->db->createCommand(
"SELECT p.id, p.nombre, p.precio, p.img_ruta, ci.cantidad, ci.user_id, ci.id,ci.cantidad * p.precio AS subtotal

    FROM cart_items ci LEFT JOIN productos p ON ci.product_id = p.id WHERE ci.user_id = :userid AND cadena=:vacio",$paramst)->queryAll(); 
 
    $tamArticulos=count($query);
    $indicador=0;



?>