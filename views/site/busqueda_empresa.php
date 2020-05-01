<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Busqueda por empresa';


?>



<?php
if (isset($_POST['modificar'])) {    
    $buscar=$_POST['buscar'];
    $palabra=$_POST['palabra'];

    $palabras="%".$palabra."%";
    $paramst = [':palabras'=>$palabras];
    $cn = \Yii::$app->db->createCommand(
                'SELECT nombre FROM negocios WHERE '.$buscar.' LIKE :palabras',$paramst)->queryAll();
        
                $tamNegocios=count($cn);
                $indicador=0;
                while ($indicador < $tamNegocios) 
                {
                
                    echo "<div class='pedidos'>" .
                        
                            "<div class='producto'>". 
                                "<div class='imagen'>".
                                    "<img src='".Yii::$app->getUrlManager()->getBaseUrl()."/img/somos_hidalgo.svg'>" .                    
                                        "<br>" .
                                "</div>".
                                "<br>" .
                                
                                "<div class='nombre'>" .
                                    "<p>".$cn[$indicador]['nombre']."</p>".
                                "</div>" .
                                "<div class='pedido'>".                                                                                                                                                                
                                    "<a href='".Yii::$app->getUrlManager()->getBaseUrl()."/index.php?r=site%2Flistaarticulos' id='perfil'>" .'Ver perfíl'. "</a>" .
                                "</div>" .
                                "<form method='post' action='".Yii::$app->getUrlManager()->getBaseUrl()."/index.php?r=site%2Flistaarticulos'>" .
                                        "<input type='hidden' name='_csrf' value='".Yii::$app->request->getCsrfToken()."'>" .
                                        "<input type='hidden' value='".$cn[$indicador]['id']."'>" .
                                    "</form>" .
                            
                                
                            "</div>" .

                        "</div";
                    $indicador++;
            }

    }
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/busqueda_empresas.css">  
<body>
                            
            <div class="dropdown">
            <form method="post" >
                <div class="dropdown-content">
                        <select class="form-control" id="buscar">
                            <option selected>Buscar por...</option>
                            <option value="nombre">Nombre</option>
                            <option value="giro">Giro</option>
                            <option value="colonia">Colonia</option>
                        </select>                   
                                                
                </div>          

                <div class="buscar">
                    <input type='hidden' name='_csrf' value='<?php echo Yii::$app->request->getCsrfToken();?>"'>
                    <input type="text" class="form-control" id="palabra" Placeholder="Escribir...">
                </div>

                <div class="icon">
                    <button type="submit" name="modificar" id="modificar">
                        <img src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-lupa-by-vexels.png" alt="">
                    </button>
                    
                </div>
                </form>
                
            </div>
        
            <div id="respuesta"></div>
           
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

    function busqueda(){
            
        var buscar = document.getElementById("buscar").value;
        var palabra = document.getElementById("palabra").value;        
    

        var parametros = {
                    "buscar" : buscar,
                    "palabra" : palabra
        };

        $.ajax({
                        data:  parametros,
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/busquedaemp') ?>',
                        type:  'post',
                        beforeSend: function () {
                            $("#respuesta").text("Cargando");
                        },
                        success:  function (response) { 
                            $("#respuesta").empty();
                            $("#respuesta").append(response);



                        }
        
                    });

    }



</script>

