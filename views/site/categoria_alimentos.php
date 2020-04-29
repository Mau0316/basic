<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrate';


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/categoria_alimentos.css">  
<body>

            <div class="categoria">    
                <p>CATEGORÍAS ALIMENTOS PREPARADOS</p>
            </div>
            <br><br><br>
           
            
        
            <div class="dropdown">
                <div id="myDropdown" class="dropdown-content">
                        <select class="form-control" >
                            <option selected>Buscar</option>
                            <option>Código postal</option>
                            <option>Ciudad</option>
                            <option>Municipio</option>
                        </select>
                </div>
                <div class="icon">
                            <img src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-lupa-by-vexels.png" alt="">
                            </div>
            </div>
            <br><br><br>

            
        
        <div class="pedidos">
            
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 1</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 2</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 3</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>     
            <br>       
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 4</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 5</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 6</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>
            <br>
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 7</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 8</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>    
            <div class="producto">
                <div class="imagen">
                    <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/somos_hidalgo.svg" alt="Categoría 1">
                    <br>                                     
                </div>
                <br>
                <div class="nombre">
                    <p>Empresa 9</p>
                </div>
                <div class="pedido">                        
                    <button class=" btn ">Ver perfil</button>
                </div>  
            </div>
           
            
            
        </div>

</body>