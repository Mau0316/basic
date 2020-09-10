<?php

/* @var $this yii\web\View */
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Aloha'; 

/*Código para conocer número de registrados */
$cn = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda')->queryAll();

    $tamNegocios=count($cn);
    $indicador=0;    
    while ($indicador < $tamNegocios) 
    {                                                                                                                
        $indicador++;        
    }
    
    /*Itinerario kids*/
    /*Código para conocer nivel 1 */
$niv1 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 1 AND itinerario = "kids"')->queryAll();
    $tamNivel1=count($niv1);
    $nivel1=0;
    while ($nivel1 < $tamNivel1) 
    {                   
        $nivel1++;          
    }
    /* Código para conocer nivel 2 */
$niv2 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 2 AND itinerario = "kids"')->queryAll();
    $tamNivel2=count($niv2);
    $nivel2=0;
    while ($nivel2 < $tamNivel2) 
    {                   
        $nivel2++;        
    }

    /*Código para conocer nivel 3 */
$niv3 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 3 AND itinerario = "kids"')->queryAll();
    $tamNivel3=count($niv3);
    $nivel3=0;
    while ($nivel3 < $tamNivel3) 
    {                   
        $nivel3++;
    }

        /*Código para conocer nivel 4 */
$niv4 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 4 AND itinerario = "kids"')->queryAll();
    $tamNivel4=count($niv4);
    $nivel4=0;
    while ($nivel4 < $tamNivel4) 
    {                   
        $nivel4++;
    }

        /*Código para conocer nivel 5*/
$niv5 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 5 AND itinerario = "kids"')->queryAll();
    $tamNivel5=count($niv5);
    $nivel5=0;
    while ($nivel5 < $tamNivel5) 
    {                   
        $nivel5++;
    }

        /*Código para conocer nivel 6*/
$niv6 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 6 AND itinerario = "kids"')->queryAll();
    $tamNivel6=count($niv6);
    $nivel6=0;
    while ($nivel6 < $tamNivel6) 
    {                   
        $nivel6++;
    }

        /*Código para conocer nivel 7*/
$niv7 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 7 AND itinerario = "kids"')->queryAll();
    $tamNivel7=count($niv7);
    $nivel7=0;
    while ($nivel7 < $tamNivel7) 
    {                   
        $nivel7++;
    }

        /*Código para conocer nivel 8*/
$niv8 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 8 AND itinerario = "kids"')->queryAll();
    $tamNivel8=count($niv8);
    $nivel8=0;
    while ($nivel8 < $tamNivel8) 
    {                   
        $nivel8++;
    }

        /*Código para conocer nivel 9*/
$niv9 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 9 AND itinerario = "kids"')->queryAll();
    $tamNivel9=count($niv9);
    $nivel9=0;
    while ($nivel9 < $tamNivel9) 
    {                   
        $nivel9++;
    }

            /*Código para conocer nivel 10*/
$niv10 = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 10 AND itinerario = "kids"')->queryAll();
    $tamNivel10=count($niv10);
    $nivel10=0;
    while ($nivel10 < $tamNivel10) 
    {                   
        $nivel10++;
    }

    /*Itinerario Tiny*/
    /*Código para conocer nivel 1 */
$niv1tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 1 AND itinerario = "tiny"')->queryAll();
    $tamNivel1tiny=count($niv1tiny);
    $nivel1tiny=0;
    while ($nivel1tiny < $tamNivel1tiny) 
    {                   
        $nivel1tiny++;
    }
    /* Código para conocer nivel 2 */
$niv2tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 2 AND itinerario = "tiny"')->queryAll();
    $tamNivel2tiny=count($niv2tiny);
    $nivel2tiny=0;
    while ($nivel2tiny < $tamNivel2tiny) 
    {                   
        $nivel2tiny++;
    }

    /*Código para conocer nivel 3 */
$niv3tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 3 AND itinerario = "tiny"')->queryAll();
    $tamNivel3tiny=count($niv3tiny);
    $nivel3tiny=0;
    while ($nivel3tiny < $tamNivel3tiny) 
    {                   
        $nivel3tiny++;
    }

        /*Código para conocer nivel 4 */
$niv4tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 4 AND itinerario = "tiny"')->queryAll();
    $tamNivel4tiny=count($niv4tiny);
    $nivel4tiny=0;
    while ($nivel4tiny < $tamNivel4tiny) 
    {                   
        $nivel4tiny++;
    }

        /*Código para conocer nivel 5*/
$niv5tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 5 AND itinerario = "tiny"')->queryAll();
    $tamNivel5tiny=count($niv5tiny);
    $nivel5tiny=0;
    while ($nivel5tiny < $tamNivel5tiny) 
    {                   
        $nivel5tiny++;
    }

        /*Código para conocer nivel 6*/
$niv6tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 6 AND itinerario = "tiny"')->queryAll();
    $tamNivel6tiny=count($niv6tiny);
    $nivel6tiny=0;
    while ($nivel6tiny < $tamNivel6tiny) 
    {                   
        $nivel6tiny++;
    }

        /*Código para conocer nivel 7*/
$niv7tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 7 AND itinerario = "tiny"')->queryAll();
    $tamNivel7tiny=count($niv7tiny);
    $nivel7tiny=0;
    while ($nivel7tiny < $tamNivel7tiny) 
    {                   
        $nivel7tiny++;
    }

        /*Código para conocer nivel 8*/
$niv8tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 8 AND itinerario = "tiny"')->queryAll();
    $tamNivel8tiny=count($niv8tiny);
    $nivel8tiny=0;
    while ($nivel8tiny < $tamNivel8tiny) 
    {                   
        $nivel8tiny++;
    }

        /*Código para conocer nivel 9*/
$niv9tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 9 AND itinerario = "tiny"')->queryAll();
    $tamNivel9tiny=count($niv9tiny);
    $nivel9tiny=0;
    while ($nivel9tiny < $tamNivel9tiny) 
    {                   
        $nivel9tiny++;
    }

    /*Código para conocer nivel 10*/
$niv10tiny = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 10 AND itinerario = "tiny"')->queryAll();
    $tamNivel10tiny=count($niv10tiny);
    $nivel10tiny=0;
    while ($nivel10tiny < $tamNivel10tiny) 
    {                   
        $nivel10tiny++;
    }

    /*Código para obtener nivel en itinerario kinder*/

    /*Código para obtener nivel 2*/
$niv2kinder = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 2 AND itinerario = "kinder"')->queryAll();
    $tamNivel2kinder=count($niv2kinder);
    $nivel2kinder=0;
    while ($nivel2kinder < $tamNivel2kinder) 
    {                   
        $nivel2kinder++;        
    }

    /*Código para conocer nivel 3*/
$niv3kinder = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 3 AND itinerario = "kinder"')->queryAll();
    $tamNivel3kinder=count($niv3kinder);
    $nivel3kinder=0;
    while ($nivel3kinder < $tamNivel3kinder) 
    {                   
        $nivel3kinder++;
    }

    /*Código para obtener nivel en itinerario pre*/

    /*Código para obtener nivel 1*/
$niv1pre = \Yii::$app->db->createCommand(
    'SELECT * FROM usuarios_segunda WHERE nivel = 1 AND itinerario = "pre"')->queryAll();
    $tamNivel1pre=count($niv1pre);
    $nivel1pre=0;
    while ($nivel1pre < $tamNivel1pre) 
    {                   
        $nivel1pre++;        
    }

?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/style.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

<script type = "text/javascript">

    function mensaje(){

        if (document.getElementById("condiciones").checked==true)
        {
            if (document.getElementById("kids").checked==true)
            {
                var itinerario = 'kids';        
            }
            if (document.getElementById("tiny").checked==true)
            {
                var itinerario ='tiny';        
            }
            if (document.getElementById("kinder").checked==true)
            {
                var itinerario ='kinder';        
            }

            if (document.getElementById("pre").checked==true)
            {
                var itinerario ='pre';        
            }
                  
            
            var espera = document.getElementById("espera").value;

            /*Obtener id con itinerario Kids*/
            var nivel1 = document.getElementById("nivel1").value;
            var nivel2 = document.getElementById("nivel2").value;
            var nivel3 = document.getElementById("nivel3").value;
            var nivel4 = document.getElementById("nivel4").value;
            var nivel5 = document.getElementById("nivel5").value;
            var nivel6 = document.getElementById("nivel6").value;
            var nivel7 = document.getElementById("nivel7").value;
            var nivel8 = document.getElementById("nivel8").value;
            var nivel9 = document.getElementById("nivel9").value;
            var nivel10 = document.getElementById("nivel10").value;

            /*Obtener id con itinerario tiny*/
            var nivel1tiny = document.getElementById("nivel1tiny").value;
            var nivel2tiny = document.getElementById("nivel2tiny").value;
            var nivel3tiny = document.getElementById("nivel3tiny").value;
            var nivel4tiny = document.getElementById("nivel4tiny").value;
            var nivel5tiny = document.getElementById("nivel5tiny").value;
            var nivel6tiny = document.getElementById("nivel6tiny").value;
            var nivel7tiny = document.getElementById("nivel7tiny").value;
            var nivel8tiny = document.getElementById("nivel8tiny").value;
            var nivel9tiny = document.getElementById("nivel9tiny").value;
            var nivel10tiny = document.getElementById("nivel10tiny").value;

            /*Obtener id con itinerario kinder*/
            var nivel2kinder = document.getElementById("nivel2kinder").value;
            var nivel3kinder = document.getElementById("nivel3kinder").value;

            /*Obtener id con itinerario pre*/
            var nivel1pre = document.getElementById("nivel1pre").value;

            

            var matricula = document.getElementById("matricula").value;
            var nombre = document.getElementById("nombre").value;
            var apellidos = document.getElementById("apellidos").value;
            var email = document.getElementById("email").value;
            var celular = document.getElementById("celular").value;
            var pais = document.getElementById("pais").value;
            var estado = document.getElementById("estado").value;
            var franquicia = document.getElementById("franquicia").value;
            var colegio = document.getElementById("colegio").value;
            var nacimiento = document.getElementById("nacimiento").value;
            var nivel = $('input:radio[name=n_acreditado]:checked').val();
            expr = /^([a-zA-Z0-9_\.\ñ\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;          

            if(!document.querySelector('input[name="iti"]:checked')) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor selecciona tu itinerario!'            
                })
                return false;
            }
            
            else if(!document.querySelector('input[name="n_acreditado"]:checked')) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor selecciona tu nivel!'            
                })
                return false;
            }

            else if (document.getElementById("kinder").checked==true && document.getElementById("tiny").checked==true){
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Solo puedes seleccionar un itinerario!'            
                })
                return false;
            }

            else if (document.getElementById("kinder").checked==true && document.getElementById("kids").checked==true){
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Solo puedes seleccionar un itinerario!'            
                })
                return false;
            }

            else if (document.getElementById("kinder").checked==true && document.getElementById("pre").checked==true){
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Solo puedes seleccionar un itinerario!'            
                })
                return false;
            }

            else if (document.getElementById("tiny").checked==true && document.getElementById("kids").checked==true){
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Solo puedes seleccionar un itinerario!'            
                })
                return false;
            }

            else if (document.getElementById("tiny").checked==true && document.getElementById("pre").checked==true){
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Solo puedes seleccionar un itinerario!'            
                })
                return false;
            }

            else if (document.getElementById("kids").checked==true && document.getElementById("tiny").checked==true && document.getElementById("kinder").checked==true && document.getElementById("pre").checked==true){
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Solo puedes seleccionar un itinerario!'            
                })
                return false;
            }

            /* Validaciones para itinerario kids*/           
            else if (document.getElementById('uno').checked & nivel1 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('dos').checked & nivel2 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('tres').checked & nivel3 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('cuatro').checked & nivel4 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('cinco').checked & nivel5 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('seis').checked & nivel6 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('siete').checked & nivel7 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('ocho').checked & nivel8 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('nueve').checked & nivel9 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('diez').checked & nivel10 >= 100 & document.getElementById("kids").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }
            /*Termina validaciones itinerario kids*/

            /* Validaciones para itinerario tiny*/           
            else if (document.getElementById('uno').checked & nivel1tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('dos').checked & nivel2tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('tres').checked & nivel3tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('cuatro').checked & nivel4tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('cinco').checked & nivel5tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('seis').checked & nivel6tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('siete').checked & nivel7tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('ocho').checked & nivel8tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('nueve').checked & nivel9tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('diez').checked & nivel10tiny >= 100 & document.getElementById("tiny").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }
            /*Termina validaciones itinerario tiny*/   

            /*Inicia validaciones itinerario kinder*/   
            else if (document.getElementById('dos').checked & nivel2kinder >= 100 & document.getElementById("kinder").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }

            else if (document.getElementById('tres').checked & nivel3kinder >= 100 & document.getElementById("kinder").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }
            /*Termina validaciones itinerario tiny*/ 

            /*Inicia validaciones itinerario kinder*/   
            else if (document.getElementById('uno').checked & nivel1pre >= 100 & document.getElementById("pre").checked==true) {                
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Lo sentimos, no hay vacantes disponibles para este nivel!'            
                })
                return false;
            }                        
            /*Termina validaciones itinerario tiny*/           


            else if( matricula == null || matricula.length == 0 || /^\s+$/.test(matricula) ) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu matrícula!'            
                })
                return false;
            }

            else if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu nombre!'            
                })
                return false;
            }

            else if (apellidos == null || apellidos.length == 0 || /^\s+$/.test(apellidos)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tus apellidos!'            
                })
                return false;
            }        

            else if (pais == null || pais.length == 0 || /^\s+$/.test(pais)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu país!'            
                })
                return false;
            }

            else if (estado == null || estado.length == 0 || /^\s+$/.test(estado)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu estado!'            
                })
                return false;
            }

            else if (franquicia == null || franquicia.length == 0 || /^\s+$/.test(franquicia)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu franquicia!'            
                })
                return false;
            }

            else if (colegio == null || colegio.length == 0 || /^\s+$/.test(colegio)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu colegio!'            
                })
                return false;
            }

            else if (nacimiento == null || nacimiento.length == 0 || /^\s+$/.test(nacimiento)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu fecha de nacimiento!'            
                })
                return false;
            }               

            else if (celular == null || celular.length == 0 || /^\s+$/.test(celular)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa tu número de teléfono con lada!'            
                })
                return false;
            }            

            else if( !(/^[\+]?\d{12}$/.test(celular)) ) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor verifica tu número de teléfono!'            
                })
                return false;
            }                           

            else if (email == null || email.length == 0 || /^\s+$/.test(email)) {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Por favor ingresa una dirección de correo electrónico!'            
                })
                return false;
            }
            
            else if ( !expr.test(email))
            {
                Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Formato incorrecto de correo electrónico!'            
                })
                return false;
            }
                    
                var parametros = {                        
                        "nombre" : nombre,
                        "apellidos" : apellidos,
                        "email": email,
                        "matricula": matricula,
                        "itinerario" : itinerario,
                        "celular" : celular,
                        "pais": pais,
                        "estado" : estado,                        
                        "franquicia" : franquicia,
                        "colegio" : colegio,
                        "nacimiento" : nacimiento,
                        "nivel" : nivel
                    };

                    if (espera <= 4000){

                        $.ajax({
                            data:  parametros,
                            url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/registro') ?>',
                            type:  'post',
                            beforeSend: function () {
                            },
                            success:  function (response) {
                                
                        if (response){                                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos registrados exitósamente,',
                            showConfirmButton: false,                                        
                            footer: '<a href="http://alohachallengeonline.com/web/"> OK</a>',
                            showClass: {
                                popup: 'animated fadeInDown faster'
                            },
                            hideClass: {
                                popup: 'animated fadeOutUp faster'
                            }
                            })
                            document.getElementById("nombre").value = "";
                            document.getElementById("apellidos").value = "";
                            document.getElementById("email").value = "";
                            document.getElementById("celular").value = "";
                            document.getElementById("pais").value = "";
                            document.getElementById("estado").value = "";
                            document.getElementById("franquicia").value = "";
                            document.getElementById("colegio").value = "";
                            document.getElementById("nacimiento").value = "";
                            document.getElementById("itinerario").value = "";
                            document.querySelectorAll('[name=iti]').forEach((x) => x.checked=false);
                            document.querySelectorAll('[name=n_acreditado]').forEach((x) => x.checked=false);
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

                        } //if llave lista de espera

                    if (espera >4000){
                        $.ajax({
                            data:  parametros,
                            url:   '<?php echo \Yii::$app->getUrlManager()->createUrl('site/registroespera') ?>',
                            type:  'post',
                            beforeSend: function () {
                            },
                            success:  function (response) {
                                
                    if (response){                                        
                        Swal.fire({
                                icon: 'success',
                                title: 'Fuiste agregado a lista de espera',
                                showConfirmButton: false,
                                footer: '<a href="http://alohachallengeonline.com/web/"> OK</a>',
                                showClass: {
                                    popup: 'animated fadeInDown faster'
                                },
                                hideClass: {
                                    popup: 'animated fadeOutUp faster'
                                }
                                })
                            document.getElementById("nombre").value = "";
                            document.getElementById("apellidos").value = "";
                            document.getElementById("email").value = "";
                            document.getElementById("celular").value = "";
                            document.getElementById("pais").value = "";
                            document.getElementById("estado").value = "";
                            document.getElementById("franquicia").value = "";
                            document.getElementById("colegio").value = "";
                            document.getElementById("nacimiento").value = "";
                            document.getElementById("itinerario").value = "";
                            document.querySelectorAll('[name=iti]').forEach((x) => x.checked=false);
                            document.querySelectorAll('[name=n_acreditado]').forEach((x) => x.checked=false);
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
                    } //condicion de lista de espera                     

        }
        else{
            Swal.fire({
                icon: 'error',
                title: 'Acepta términos y condiciones ',
                showClass: {
                    popup: 'animated fadeInDown faster'
                },
                hideClass: {
                    popup: 'animated fadeOutUp faster'
                }
                })
                return false;
        }

    }

</script>

<body>

    <!--Input para saber cantidad de usuarios registrados-->
    <input type="hidden" id="espera" value="<?php echo $indicador?>">
    <!--Inputs cantidad de registrados en niveles con itinerario kids-->
    <input type="hidden" id="nivel1" value="<?php echo $nivel1?>">
    <input type="hidden" id="nivel2" value="<?php echo $nivel2?>">
    <input type="hidden" id="nivel3" value="<?php echo $nivel3?>">
    <input type="hidden" id="nivel4" value="<?php echo $nivel4?>">
    <input type="hidden" id="nivel5" value="<?php echo $nivel5?>">
    <input type="hidden" id="nivel6" value="<?php echo $nivel6?>">
    <input type="hidden" id="nivel7" value="<?php echo $nivel7?>">
    <input type="hidden" id="nivel8" value="<?php echo $nivel8?>">
    <input type="hidden" id="nivel9" value="<?php echo $nivel9?>">
    <input type="hidden" id="nivel10" value="<?php echo $nivel10?>">

    <!--Inputs cantidad de registrados en niveles con itinerario tiny-->
    <input type="hidden" id="nivel1tiny" value="<?php echo $nivel1tiny?>">
    <input type="hidden" id="nivel2tiny" value="<?php echo $nivel2tiny?>">
    <input type="hidden" id="nivel3tiny" value="<?php echo $nivel3tiny?>">
    <input type="hidden" id="nivel4tiny" value="<?php echo $nivel4tiny?>">
    <input type="hidden" id="nivel5tiny" value="<?php echo $nivel5tiny?>">
    <input type="hidden" id="nivel6tiny" value="<?php echo $nivel6tiny?>">
    <input type="hidden" id="nivel7tiny" value="<?php echo $nivel7tiny?>">
    <input type="hidden" id="nivel8tiny" value="<?php echo $nivel8tiny?>">
    <input type="hidden" id="nivel9tiny" value="<?php echo $nivel9tiny?>">
    <input type="hidden" id="nivel10tiny" value="<?php echo $nivel10tiny?>">   

    <!--Inputs cantidad de registrados en niveles con itinerario kinder-->
    <input type="hidden" id="nivel2kinder" value="<?php echo $nivel2kinder?>">
    <input type="hidden" id="nivel3kinder" value="<?php echo $nivel3kinder?>"> 

    <!--Inputs cantidad de registrados en niveles con itinerario pre-->
    <input type="hidden" id="nivel1pre" value="<?php echo $nivel1pre?>">    
    
    <div class="img_inicio">
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/imagenes/inicio.jpeg" alt="Changuito">                
    </div>

    <div class="registro">

        <input type="hidden" name="_csrf" value="5CGthysOYWQo_zil7F4HeNCq0HdZONZnEMkORcePcRyjfp-_akhXUEaPesGlNnY-tpiTJRsBuQhVmFQCs84pKA==">

        <p>Correo</p>
        
        <input type="text" class="form-control" id="email" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
    
        <p>Nombre(s)</p>        
        <input type="text" class="form-control" id="nombre" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
        
        <p>Apellidos</p>        
        <input type="text" class="form-control" id="apellidos" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">

        <p>Teléfono Móvil (Con Prefijo)</p>        
        <input type="text" class="form-control" id="celular" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
        
        <p>Comunidad autónoma</p>        
        <input type="text" class="form-control" id="comunidad" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">

        <p>Provincia</p>        
        <input type="text" class="form-control" id="provincia" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">

        <p>Ciudad</p>        
        <input type="text" class="form-control" id="ciudad" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">

        <p>Colegio o centro</p>        
        <input type="text" class="form-control" id="colegio" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">

        <p>Fecha de nacimiento</p>        
        <input type="date" class="form-control" id="nacimiento" autofocus="" aria-required="true" aria-invalid="true" required="true" autocomplete="false">
        
        <div class="itinerario">

            <p>Itinerario</p>

            <br>

            <input type="checkbox" class="form-control" name="iti" id="kids"  value="kids" ><p>Kids</p>

            <input type="checkbox" class="form-control" name="iti" id="tiny"  value="tiny"><p>Tiny Tots</p>

        </div>

        <div class="nivel">

            <p>Nivel finalizado</p>

            <br>

            <input type="radio" name="n_acreditado" id="uno" value="1"> <p>1</p>

            <br>

            <input type="radio" name="n_acreditado" id="dos" value="2"> <p>2</p>

            <br>

            <input type="radio" name="n_acreditado" id="tres" value="3"> <p>3</p>

            <br>

            <input type="radio" name="n_acreditado" id="cuatro" value="4"> <p>4</p>

            <br>

            <input type="radio" name="n_acreditado" id="cinco" value="5"> <p>5</p>

            <br>

            <input type="radio" name="n_acreditado" id="seis" value="6"> <p>6</p>

            <br>

            <input type="radio" name="n_acreditado" id="siete" value="7"> <p>7</p>

            <br>

            <input type="radio" name="n_acreditado" id="ocho" value="8"> <p>8</p>

            <br>

            <input type="radio" name="n_acreditado" id="nueve" value="9"> <p>9</p>

            <br>

            <input type="radio" name="n_acreditado" id="diez" value="10"> <p>10</p>

        </div>

        <br>

        <div class="condiciones">

        <input type="checkbox" id="condiciones">
        <p>Acepto términos y condiciones</p>

        <br>

        

        </div>

        <p>Para conocerlos,
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/archivos/TyC.pdf" style="color:red" target="blank">
            da click aquí. </a></p>                    

        <br>

        <h3 id="ademas">Además, tu registro te podrá hacer participar en nuestro sorteo por una tablet.</h3>
        <p>Conoce más información acerca del sorteo,
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/archivos/BasesSorteo.pdf" style="color:red" target="blank">
            da click aquí. </a></p>   

        <br>

        <button onClick="mensaje()" class="btn btn-primary">Registrarme</button>
            
        
    </div>    

    <div class="campeonato">

        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/imagenes/changuito.png" alt="Changuito">                
        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/imagenes/TROFEO.png" alt="Trofeo">     

    </div>

    <div class="ubicacion">        

        <div class="challenge">

          <p>ALOHA Challenge México-España, será una  <br> competición de cálculo online única y divertida. </p>
          <br>
          <p>Participar es muy sencillo, solo necesitas tu ábaco, <br> conexión a internet y  dos dispositivos: <br> un ordenador o tablet y un móvil.</p>
                  
        </div>

        <br>

        <div class="recuerda">
                        
            <p>El Challenge se celebrará en un horario por la mañana <br> en México y por la tarde en España.</p>           
            <br>
            <p>El día anterior se celebrará una Previa al Challenge para que, <br> los que quieran, puedan poner en práctica sus <br> habilidades matemáticas y sus dispositivos.</p>
            <br>
            <p>Les enviaremos el horario definitivo a partir del  25 de septiembre.</p>
          
        </div>

        <br>
          
    </div>

    <div class="beneficios">

        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/imagenes/beneficios.png" alt="Trofeo">

    </div>

    <div class="fecha">
        
        <p>Practica para el gran día. A partir del día 14 de septiembre te enviaremos varios Challenge para que, si quieres, puedas practicar y ver en qué consistirá el Challenge final.</p>
        <p>Recuerda que tu horario, se enviará 2 días antes de la competición.</p>

    </div>
    
  

</body>