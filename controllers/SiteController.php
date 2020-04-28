<?php

namespace app\controllers;

use Yii;
use app\models\FormRegister;
use app\models\Users;
use yii\models\User;
use yii\widgets\ActiveForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Aspirantes;
use app\models\Negocios;
use app\models\Usuarios;
use yii\data\Pagination;

class SiteController extends Controller
{
  
 
 private function randKey($str='', $long=0)
    {
        $key = null;
        $str = str_split($str);
        $start = 0;
        $limit = count($str)-1;
        for($x=0; $x<$long; $x++)
        {
            $key .= $str[rand($start, $limit)];
        }
        return $key;
    }
 
 public function actionRegister()
 {
  //Creamos la instancia con el model de validación
  $model = new FormRegister;
   
  //Mostrará un mensaje en la vista cuando el usuario se haya registrado
  $msg = null;
   
  //Validación mediante ajax
  if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax)
        {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
   
  //Validación cuando el formulario es enviado vía post
  //Esto sucede cuando la validación ajax se ha llevado a cabo correctamente
  //También previene por si el usuario tiene desactivado javascript y la
  //validación mediante ajax no puede ser llevada a cabo
  if ($model->load(Yii::$app->request->post()))
  {
   if($model->validate())
   {
    //Preparamos la consulta para guardar el usuario
    $table = new Users;
    $table->username = $model->username;
    $table->email = $model->email;
    //Encriptamos el password
    $table->password = crypt($model->password, Yii::$app->params["salt"]);
    //Creamos una cookie para autenticar al usuario cuando decida recordar la sesión, esta misma
    //clave será utilizada para activar el usuario
    $table->authKey = $this->randKey("abcdef0123456789", 200);
    //Creamos un token de acceso único para el usuario
    $table->accessToken = $this->randKey("abcdef0123456789", 200);
     
    //Si el registro es guardado correctamente
    if ($table->insert())
    {
     //Nueva consulta para obtener el id del usuario
     //Para confirmar al usuario se requiere su id y su authKey
     $user = $table->find()->where(["email" => $model->email])->one();
     $id = urlencode($user->id);
     $authKey = urlencode($user->authKey);
      
     $subject = "Confirmar registro";
     $body = "<h1>Haga click en el siguiente enlace para finalizar tu registro</h1>";
     $body .= "<a href='http://yii.local/index.php?r=site/confirm&id=".$id."&authKey=".$authKey."'>Confirmar</a>";
      
     //Enviamos el correo
     Yii::$app->mailer->compose()
     ->setTo($user->email)
     ->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
     ->setSubject($subject)
     ->setHtmlBody($body)
     ->send();
     
     $model->username = null;
     $model->email = null;
     $model->password = null;
     $model->password_repeat = null;
     
     $msg = "Enhorabuena, ahora sólo falta que confirmes tu registro en tu cuenta de correo";
    }
    else
    {
     $msg = "Ha ocurrido un error al llevar a cabo tu registro";
    }
     
   }
   else
   {
    $model->getErrors();
   }
  }
  return $this->render("register", ["model" => $model, "msg" => $msg]);
 }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProveedor()
    {
        return $this->render('proveedor');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
            /*Yii::$app->controller->redirect(['lista']);*/
            /*return $this->redirect(["site/lista"]);*/

        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLoginnegocios()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
            /*Yii::$app->controller->redirect(['lista']);*/
            /*return $this->redirect(["site/lista"]);*/

        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLoginusuarios()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
            /*Yii::$app->controller->redirect(['lista']);*/
            /*return $this->redirect(["site/lista"]);*/

        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */   

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegistronegocio($user=null,$correo=null)
    {
        $us = $_POST['user'];
        $correo = $_POST['email'];
        return $this->render('negocios', ['user' => $user,'email' => $correo]);
    }

    public function actionNegocios(){
        $nombre = $_POST['nombre'];
        $giro = $_POST['giro'];
        $nombre_titular = $_POST['nombre_titular'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $rfc = $_POST['rfc'];
        $curp = $_POST['curp'];
        $busqueda = $_POST['busqueda'];
        $direccion = $_POST['direccion'];
        $numero = $_POST['numero'];
        $colonia = $_POST['colonia'];
        $tarjeta = $_POST['tarjeta'];
        $factura = $_POST['factura'];
        $validacion = $_POST['validacion'];
           
        $res = Yii::$app->db->createCommand()->insert('negocios', [
            'nombre' => $nombre,
            'giro' => $giro,
            'nombre_titular' => $nombre_titular,
            'email' => $email,
            'celular' => $celular,
            'rfc' => $rfc,
            'curp' => $curp,
            'busqueda' => $busqueda,
            'direccion' => $direccion,
            'numero' => $numero,
            'colonia' => $colonia,
            'tarjeta' => $tarjeta,
            'factura' => $factura,
            'validacion' => $validacion,           
            ])->execute();
            if($res){
                return true;
            }
            else{
                return false;
            }
            
    }

    public function actionRegistrousuario($user=null, $correo=null)
    {
        $us = $_POST['user'];
        $correo = $_POST ['email'];
        return $this->render('usuarios', ['user' => $user,'email' => $correo]);
    }

    public function actionUsuarios()
    {
        $nombre = $_POST['nombre'];
        $a_paterno = $_POST['a_paterno'];
        $a_materno = $_POST['a_materno'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $numero = $_POST['numero'];
        $colonia = $_POST['colonia'];
        $municipio = $_POST['municipio'];
        $c_postal = $_POST['c_postal'];
        $ref_domicilio = $_POST['ref_domicilio'];

        $res = Yii::$app->db->createCommand()->insert('usuarios', [
            'nombre' => $nombre,
            'a_paterno' => $a_paterno,
            'a_materno' => $a_materno,
            'celular' => $celular,
            'email' => $email,
            'direccion' => $direccion,
            'numero' => $numero,
            'colonia' => $colonia,
            'municipio' => $municipio,
            'c_postal' => $c_postal,
            'ref_domicilio' => $ref_domicilio,            
            ])->execute();
            if($res){
                return true;
            }
            else{
                return false;
            }
        
    }

    public function actionExtra()
    {
        $email = $_POST['email'];
        $userid = $_POST['userid'];
        $rol = $_POST['rol'];
        $nombre_tabla = $_POST['nombre_tabla'];        
        $password = $_POST['password'];
        $authKey = $this->randKey("abcdef0123456789", 200);
        $accessToken = $this->randKey("abcdef0123456789", 200);
        $activate = 1;
        
        $passwordcript = crypt($password, Yii::$app->params["salt"]);

        $res = Yii::$app->db->createCommand()->insert('users', [
            'email' => $email,
            'userid' => $userid,
            'rol' => $rol,
            'nombre_tabla' => $nombre_tabla,
            'password' => $passwordcript,
            'authKey' => $authKey,
            'accessToken' => $accessToken,
            'activate' => $activate          
            ])->execute();
            if($res){
                return true;
            }
            else{
                return false;
            }        
    }
    

    public function actionRegistrorepartidor($user=null,$correo=null)
    {
        $us = $_POST['user'];
        $correo = $_POST['email'];
        return $this->render('registro', ['user' => $user,'email' => $correo]);
    }

    public function actionRegistro()
    {        
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $vehiculo = $_POST['vehiculo'];
        $curp = $_POST['curp'];
        $tel_concesionario = $_POST['tel_concesionario'];
        $tel_envios = $_POST['tel_envios'];
        $direccion = $_POST['direccion'];
        $localidad = $_POST['localidad'];
        $num = $_POST['num'];
        $placas = $_POST['placas'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serie = $_POST['serie'];
        $conductores = $_POST ['conductores'];
        $celular = $_POST ['celular'];
        $horario = $_POST['horario'];
        $ine = $_POST ['ine'];
        $email = $_POST['email'];
        $pago = $_POST['pago'];        

        $res = Yii::$app->db->createCommand()->insert('aspirantes', [
            'nombre' => $nombre,
            'paterno' => $paterno,
            'materno' => $materno,
            'vehiculo' => $vehiculo,
            'curp' => $curp,
            'tel_concesionario' => $tel_concesionario,
            'tel_envios' => $tel_envios,
            'direccion' => $direccion,
            'localidad' => $localidad,
            'num' => $num,
            'placas' => $placas,
            'marca' => $marca,
            'modelo' => $modelo,
            'serie' => $serie,
            'conductores' => $conductores,
            'celular' => $celular,
            'horario' => $horario,
            'ine' => $ine,
            'email' => $email,
            'pago' => $pago,
            ])->execute();
            if($res){
                return true;
            }
            else{
                return false;
            }
        //return $this -> render('registro');
    }

    public function actionRegistroindividual($id=null){
        return $this->render('registro_individual');
    }

    public function actionNegocioindividual($id=null){
        return $this->render('negocio_individual');
    }

    public function actionUsuarioindividual($id=null)
    {
        return $this->render('usuario_individual');
    }

    public function actionLista(){
        
        $query = aspirantes::find();

      $pagination = new Pagination([
        'defaultPageSize' => 10,
        'totalCount' => $query->count(),
        ]);

      $aspirantes = $query->orderBy('id')
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

      return $this->render('lista',[
        'aspirantes' => $aspirantes,
        'pagination' => $pagination,
      ]);
    }

    public function actionListanegocios(){
        $query = negocios::find();

      $pagination = new Pagination([
        'defaultPageSize' => 10,
        'totalCount' => $query->count(),
        ]);

      $negocios = $query->orderBy('id')
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

      return $this->render('lista_negocios',[
        'negocios' => $negocios,
        'pagination' => $pagination,
      ]);
    }

    public function actionListausuarios(){
        $query = usuarios::find();

      $pagination = new Pagination([
        'defaultPageSize' => 10,
        'totalCount' => $query->count(),
        ]);

      $negocios = $query->orderBy('id')
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

      return $this->render('lista_usuarios',[
        'usuarios' => $negocios,
        'pagination' => $pagination,
      ]);
    }



    public function actionModificar(){

        if (isset($_POST['modificar'])) {
            $id= $_POST['id'];
        //$usuario=Yii::$app->user->identity->nombre; //Nombre del usuario logeado    
        Yii::$app->controller->redirect(['registroindividual', 'id'=> $id]);
        //$r=Yii::$app->user->identity->rol;                
        }

    }

    public function actionModificarnegocio(){

        if (isset($_POST['modificarnegocio'])) {
            $id= $_POST['id'];
        //$usuario=Yii::$app->user->identity->nombre; //Nombre del usuario logeado    
        Yii::$app->controller->redirect(['negocioindividual', 'id'=> $id]);
        //$r=Yii::$app->user->identity->rol;                
        }

    }

    public function actionModificarusuario(){

        if (isset($_POST['modificarusuario'])) {
            $id= $_POST['id'];
        //$usuario=Yii::$app->user->identity->nombre; //Nombre del usuario logeado    
        Yii::$app->controller->redirect(['usuarioindividual', 'id'=> $id]);
        //$r=Yii::$app->user->identity->rol;                
        }

    }
    
}