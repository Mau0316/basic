<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Busqueda por empresa';


?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/busqueda_empresas.css">  
<body>
                            
            <div class="dropdown">

                <div class="dropdown-content">
                        <select class="form-control" id="buscar">
                            <option selected>Buscar por...</option>
                            <option value="nombre">Nombre</option>
                            <option value="giro">Giro</option>
                            <option value="colonia">Colonia</option>
                        </select>                   
                                                
                </div>          

                <div class="buscar">
                    <input type="text" class="form-control" id="palabra" Placeholder="Escribir...">
                </div>

                <div class="icon">
                    <button onClick="busqueda()">
                        <img src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-lupa-by-vexels.png" alt="">
                    </button>
                    
                </div>
                
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