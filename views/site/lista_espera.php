<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Lista de usuarios';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/lista.css">  
<?php

if (Yii::$app->user->isGuest) {
    Yii::$app->controller->redirect(['index']);
}
?>
<?php

if (isset($_POST['eliminar'])) 
{    
        $ids=$_POST['id'];        
        $paramst = [':id'=>$ids];
		$arreglo = \Yii::$app->db->createCommand(
            'DELETE FROM usuarios_segunda WHERE id=:id',$paramst)->execute();
            Yii::$app->controller->redirect(['listaespera']);                        
}

?>
<body>

    <div class="dropdown">

        <form method="post" >
            <div class="dropdown-content">
                    <select class="form-control" id="buscar">
                        <option selected>Buscar por...</option>
                        <option value="nombre">Nombre</option>
                        <option value="apellidos">Apellidos</option>
                        <option value="celular">Celular</option>
                        <option value="estado">Estado</option>
                        <option value="colegio">Colegio</option>
                        <option value="franquicia">Franquicia</option>
                        <option value="nacimiento">Nacimiento</option>
                        <option value="itinerario">Itinerario</option>
                        <option value="nivel">Nivel</option>
                    </select>                   
                                            
            </div>          

            <div class="buscar">
                <input type='hidden' name='_csrf' value='<?php echo Yii::$app->request->getCsrfToken();?>"'>
                <input type="text" class="form-control" id="palabra" Placeholder="Escribir...">
            </div>

            <div class="icon">

                <button type="button" name="modificar" id="modificar" onClick="busqueda()">
                    <img src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-lupa-by-vexels.png" alt="">
                </button>
                
            </div>

        </form>
                    
    </div>
    

    <h1 id="title">Lista de Usuarios Segundo Registro</h1>
    <div id="contenedor1">
            <table id="tabla">
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Celular</th>
                        <th>Estado</th>
                        <th>Franquicia</th>
                        <th>Colegio</th>
                        <th>Fecha de nacimiento</th>
                        <th>Itinerario</th>
                        <th>Nivel</th>
                        <th>Modificar</th>
                        
                    </tr>
            <?php        
                $contador = 0;    
                foreach ($usuarios as $usuario) :?>
                    <tr>
                    <td><?= Html::encode("{$usuario->id}") ?></td>
                    <td><?= Html::encode("{$usuario->email}") ?></td>
                    <td><?= Html::encode("{$usuario->nombre}") ?></td>
                    <td><?= Html::encode("{$usuario->apellidos}") ?></td>
                    <td><?= Html::encode("{$usuario->celular}") ?></td>
                    <td><?= Html::encode("{$usuario->estado}") ?></td>
                    <td><?= Html::encode("{$usuario->franquicia}") ?></td>
                    <td><?= Html::encode("{$usuario->colegio}") ?></td>
                    <td><?= Html::encode("{$usuario->nacimiento}") ?></td>
                    <td><?= Html::encode("{$usuario->itinerario}") ?></td>
                    <td><?= Html::encode("{$usuario->nivel}") ?></td>
                    <td>
                    <form method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='_csrf' value="<?php Yii::$app->request->getCsrfToken()?>">
                        <input type='hidden' name='id' value="<?php echo $usuario->id?>">
                        <button class='btn btn-danger' type='submit' name='eliminar' >Eliminar Usuario</button>
                    </form> </td>
                    </tr>
                    
                    
            <?php $contador++; endforeach;
                if ($contador == '0'){
                    echo "<div class='nulo'>";
                        echo "<h2> No hay registros aún </h2>";
                    echo "</div>";
                    echo "<style>
                        #tabla{
                            display:none;
                        }                        
                    </style>";
                }            
            ?>
            </table>

    </div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

    <div id="respuesta">


    </div>



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
                        url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/filtroespera') ?>',
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
