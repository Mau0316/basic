<?php

namespace app\controllers;

use Yii;
use yii\widgets\ActiveForm;
use app\models\FormRegister;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuarios;
use app\models\Espera;
use app\models\Users;
use yii\models\User;
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

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
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

    public function actionLogincontrol()
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
        return $this->render('login_control', [
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

    public function actionRegistrocontrol($user=null, $correo=null)
    {
        $us = $_POST['user'];
        $correo = $_POST ['email'];
        return $this->render('control', ['user' => $user,'email' => $correo]);
    }

    public function actionControl()
    {        
        $email = $_POST['email'];        
        $rol = $_POST['rol'];
        $nombre_tabla = $_POST['nombre_tabla'];
        $nombre = $_POST['nombre'];        
        $password = $_POST['password'];
        $authKey = $this->randKey("abcdef0123456789", 200);
        $accessToken = $this->randKey("abcdef0123456789", 200);
        $activate = 1;        
        $passwordcript = crypt($password, Yii::$app->params["salt"]);

        $res = Yii::$app->db->createCommand()->insert('users', [
            'email' => $email,            
            'rol' => $rol,
            'nombre_tabla' => $nombre_tabla,
            'nombre' => $nombre,         
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

    public function actionRegistro()
    {           
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $matricula = $_POST['matricula'];
        $celular = $_POST['celular'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
        $franquicia = $_POST['franquicia'];
        $colegio = $_POST['colegio'];
        $nacimiento = $_POST['nacimiento'];
        $itinerario = $_POST['itinerario'];
        if ($itinerario == 'kids'){

            $nivel = $_POST['nivel'];

            if ($nivel == 1){
                $folio = rand(4201,4300);
            }

            else if ($nivel == 2){
                $folio = rand(4401,4500);
            }

            else if ($nivel == 3){
                $folio = rand(4601,4700);
            }

            else if ($nivel == 4){
                $folio = rand(4801,4900);
            }

            else if ($nivel == 5){
                $folio = rand(5001,5100);
            }

            else if ($nivel == 6){
                $folio = rand(5201,5300);
            }

            else if ($nivel == 7){
                $folio = rand(5401,5500);
            }

            else if ($nivel == 8){
                $folio = rand(5601,5700);
            }

            else if ($nivel == 9){
                $folio = rand(5801,5900);
            }

            else if ($nivel == 10){
                $folio = rand(6001,6100);
            }

        }
        
        if ($itinerario == 'tiny'){

            $nivel = $_POST['nivel'];
            
            if ($nivel == 1){
                $folio = rand(4301,4400);
            }
            
            else if ($nivel == 2){
                $folio = rand(4501,4600);
            }
            
            else if ($nivel == 3){
                $folio = rand(4701,4800);
            }
            
            else if ($nivel == 4){
                $folio = rand(4901,5000);
            }
            
            else if ($nivel == 5){
                $folio = rand(5101,5200);
            }
            
            else if ($nivel == 6){
                $folio = rand(5301,5400);
            }
            
            else if ($nivel == 7){
                $folio = rand(5501,5600);
            }
            
            else if ($nivel == 8){
                $folio = rand(5701,5800);
            }
            
            else if ($nivel == 9){
                $folio = rand(5901,6000);
            }
            
            else if ($nivel == 10){
                $folio = rand(6101,6200);
            }
            
        }
        
        if ($itinerario == 'kinder'){

            $nivel = $_POST['nivel'];                        
            $folio = rand(1,200);    

        }

        if ($itinerario == 'pre'){

            $nivel = $_POST['nivel'];                        
            $folio = rand(1,100);    

        }
            
                         
        $res = Yii::$app->db->createCommand()->insert('usuarios_segunda', [
            'folio' => $folio,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'email' => $email,
            'celular' => $celular,
            'matricula' => $matricula,
            'pais' => $pais,
            'estado' => $estado,
            'franquicia' => $franquicia,
            'colegio' => $colegio,
            'itinerario' => $itinerario,
            'nacimiento' => $nacimiento,  
            'nivel' => $nivel,          
            ])->execute();
            if($res){                   
                
                Yii::$app->mailer->compose('@app/mail/layouts/html')
                ->setFrom('prueba@alohachallengeonline.com')
                ->setTo($email)
                ->setSubject('Registro Aloha Número de folio: '.$folio)
                ->send();                 
                return true;
            }
            else{
                return false;
            }
        //return $this -> render('registro');
    }    

    public function actionListausuarios(){
        $query = usuarios::find();

      $pagination = new Pagination([
        'defaultPageSize' => 10,
        'totalCount' => $query->count(),
        ]);

      $usuarios = $query->orderBy('id')
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

      return $this->render('lista_usuarios',[
        'usuarios' => $usuarios,
        'pagination' => $pagination,
      ]);
    }

    public function actionListaespera(){
        $query = espera::find();
    
          $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
            ]);
    
          $usuarios = $query->orderBy('id')
          ->offset($pagination->offset)
          ->limit($pagination->limit)
          ->all();
    
          return $this->render('lista_espera',[
            'usuarios' => $usuarios,
            'pagination' => $pagination,
          ]);
    }

    public function actionFiltrobusqueda()
    {
        $buscar=$_POST['buscar'];
        $palabra=$_POST['palabra'];

        $palabras="%".$palabra."%";
        $paramst = [':palabras'=>$palabras];
        $cn = \Yii::$app->db->createCommand(
                    'SELECT id, email, nombre, apellidos, celular, estado, franquicia, colegio,
                    nacimiento, itinerario, nivel
                     FROM usuarios WHERE '.$buscar.' LIKE :palabras',$paramst)->queryAll();
            
                    $tamNegocios=count($cn);
                    $indicador=0;

                    echo "<style>
                    #tabla{
                        display: none;
                    }

                    </style>";

                    echo "<div class='filtro'>";
                    echo "<h1 id='title'> Filtro de búsqueda </h1>";
                    echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistausuarios">';
                        echo "<img src='https://image.flaticon.com/icons/png/512/1055/1055185.png'>";
                        echo '</a>';
                    echo "</div>";

                    echo "<table id='tabla_filtro'>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Email</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Apellidos</th>";        
                            echo "<th>Celular</th>";
                            echo "<th>Estado</th>";
                            echo "<th>Franquicia</th>";
                            echo "<th>Colegio</th>";
                            echo "<th>Fecha de nacimiento</th>";
                            echo "<th>Itinerario</th>";
                            echo "<th>Nivel</th>";
                        echo "</tr>";


                    while ($indicador < $tamNegocios) 
                    {

                        echo "<tr>";                    
                            echo "<td>" .$cn[$indicador]['id']."</td>";
                            echo "<td>" .$cn[$indicador]['email']."</td>";
                            echo "<td>" .$cn[$indicador]['nombre']."</td>";
                            echo "<td>" .$cn[$indicador]['apellidos']."</td>";
                            echo "<td>" .$cn[$indicador]['celular']."</td>";
                            echo "<td>" .$cn[$indicador]['estado']."</td>";
                            echo "<td>" .$cn[$indicador]['franquicia']."</td>";
                            echo "<td>" .$cn[$indicador]['colegio']."</td>";
                            echo "<td>" .$cn[$indicador]['nacimiento']."</td>";
                            echo "<td>" .$cn[$indicador]['itinerario']."</td>";
                            echo "<td>" .$cn[$indicador]['nivel']."</td>";                            
                        echo "</tr>";

                        $indicador++;
                    }
                    
                    if ($indicador == '0'){
                        echo "<div class='sin_resultados'>";
                            echo "<h2> No se encontraron resultados </h2>";
                        echo "</div>";
                        echo "<style>
                        #tabla_filtro{
                            display:none;
                        }
                        </style>";
                    }
                exit();
    } 
    
    public function actionFiltroespera()
    {
        $buscar=$_POST['buscar'];
        $palabra=$_POST['palabra'];

        $palabras="%".$palabra."%";
        $paramst = [':palabras'=>$palabras];
        $cn = \Yii::$app->db->createCommand(
                    'SELECT id, email, nombre, apellidos, celular, estado, franquicia, colegio,
                    nacimiento, itinerario, nivel
                     FROM usuarios_segunda WHERE '.$buscar.' LIKE :palabras',$paramst)->queryAll();
            
                    $tamNegocios=count($cn);
                    $indicador=0;

                    echo "<style>
                    #tabla{
                        display: none;
                    }

                    </style>";

                    echo "<div class='filtro'>";
                    echo "<h1 id='title'> Filtro de búsqueda </h1>";
                    echo '<a href="'.Yii::$app->request->baseUrl.'/index.php?r=site%2Flistaespera">';
                        echo "<img src='https://image.flaticon.com/icons/png/512/1055/1055185.png'>";
                        echo '</a>';
                    echo "</div>";

                    echo "<table id='tabla_filtro'>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Email</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Apellidos</th>";        
                            echo "<th>Celular</th>";
                            echo "<th>Estado</th>";
                            echo "<th>Franquicia</th>";
                            echo "<th>Colegio</th>";
                            echo "<th>Fecha de nacimiento</th>";
                            echo "<th>Itinerario</th>";
                            echo "<th>Nivel</th>";
                        echo "</tr>";


                    while ($indicador < $tamNegocios) 
                    {

                        echo "<tr>";                    
                            echo "<td>" .$cn[$indicador]['id']."</td>";
                            echo "<td>" .$cn[$indicador]['email']."</td>";
                            echo "<td>" .$cn[$indicador]['nombre']."</td>";
                            echo "<td>" .$cn[$indicador]['apellidos']."</td>";
                            echo "<td>" .$cn[$indicador]['celular']."</td>";
                            echo "<td>" .$cn[$indicador]['estado']."</td>";
                            echo "<td>" .$cn[$indicador]['franquicia']."</td>";
                            echo "<td>" .$cn[$indicador]['colegio']."</td>";
                            echo "<td>" .$cn[$indicador]['nacimiento']."</td>";
                            echo "<td>" .$cn[$indicador]['itinerario']."</td>";
                            echo "<td>" .$cn[$indicador]['nivel']."</td>";                            
                        echo "</tr>";

                        $indicador++;
                    }
                    
                    if ($indicador == '0'){
                        echo "<div class='sin_resultados'>";
                            echo "<h2> No se encontraron resultados </h2>";
                        echo "</div>";
                        echo "<style>
                        #tabla_filtro{
                            display:none;
                        }
                        </style>";
                    }
                exit();
    }
    
}
