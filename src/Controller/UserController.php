<?php


namespace Controller;
session_start();
use Core\Controller;
use Core\Request;


class UserController extends Controller 

{
    private $email;
    private $password;
    private $array=[];
    function __construct() 
    {
        parent::__construct();
        
        if(isset($_REQUEST) && !empty($_REQUEST)) {
         
            if(key_exists('password',$_REQUEST)) {
                $this->password = $_REQUEST['password'];
            }
            if(key_exists('password',$_REQUEST)) {
                
                $this->email = $_REQUEST['email'];
            }
            
            
        }
        
        
    }
    
    
    function okAction() {
        echo'je suis la methode okAction';
        $this->render('index');
        
    }
    
    
    function profileAction() {
        
        
        $user= $_SESSION['id'];
        $user=\Model\UserModel::find(['WHERE'=> "id = '$user'"]);
        $this->render('profile');
        if(!isset($_SESSION['id'])) {
            header('Location: /w2php502p1/user/login');
        }
        
        
    }
    
    public function registerAction()
    {
        $this->render('register');  
        
        if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
            if($_REQUEST['email']== ''|| $_REQUEST['password']== ''){
                echo "Merci de remplir tout les champs !";
                die();
            }else if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
                echo 'Email incorrect!';
                die();
            }else {
                
                $entity=\Model\UserModel::find(['WHERE'=> "email = '$this->email'"]);
                
                if(!$entity) {
                    $user = new \Model\UserModel([
                        'name' => $_REQUEST['name'],
                        'lastname' => $_REQUEST['lastname'],
                        'email' => $_REQUEST['email'],
                        'password' => $_REQUEST['password']
                        ]);
                        $id=$user->create();
                        $user->read($id);
                        
                        $_SESSION['id']=$id;
                        $_SESSION['email']=$user->email;
                        $_SESSION['name']=$user->name;
                        $_SESSION['lastname']=$user->lastname;
                        
                        self::$_render = "Votre compte a été créé." . PHP_EOL;
                        header("Location: /w2php502p1/user/profile");
                        
                        if(!isset($_SESSION['id'])) {
                            header('Location: /w2php502p1/user/login');
                        }
                    } else {
                        echo  "Email déja étulisé !." . PHP_EOL;
                    }
                    
                }
            }  
            
        }
        
        
        public function loginAction()
        {   
            $this->render('login');
            if(isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
                if($_REQUEST['email'] == '') {
                    echo 'Merci de renseigner votre email!';
                    die();
                }
                else if($_REQUEST['password']== '') {
                    echo "merci de renseigner le mot de passe!";
                    die();
                } else {
                    $user=\Model\UserModel::find(['WHERE'=> "email = '$this->email'AND password = '$this->password'"]);
                    if($user) {
                        $_SESSION['id']=$user[0]->id;
                        $_SESSION['email']=$user[0]->email;
                        $_SESSION['name']=$user[0]->name;
                        $_SESSION['lastname']=$user[0]->lastname;
                        
                        header("Location: /w2php502p1/user/profile");
                        
                    } else {
                        echo  " Identifiants incorect !." . PHP_EOL;
                    }
                }
            }    
        }
        
        public function lougoutAction()
        {
            session_unset();
            session_destroy();
            $this->render('login');
        }
        
        public function showAction()
        {
            //  $this->render('show');
            
            if(isset($_REQUEST['submitdelete'])) {
                $user = new \Model\UserModel($_SESSION);
                $user->delete();
                self::$_render = "Votre compte a été supprimer." . PHP_EOL;
                
                header("Location:/w2php502p1/user/login");
                die();
            }
            
            if(isset($_REQUEST['submit'])) {
                
                
                if($_REQUEST['lastpass']==""){
                    echo "Last Password required!";
                }
                else {
                    if($_REQUEST['newpass']==""){
                        $password = $_REQUEST['lastpass'];
                    }
                    else {
                        $password =$_REQUEST['newpass'];
                    }
                    $user = new \Model\UserModel([
                        'id' => $_SESSION['id'],
                        'name' => $_REQUEST['newname'],
                        'lastname' => $_REQUEST['newlastname'],
                        'email' => $_REQUEST['newemail'],
                        'password' => $password
                        ]);
                        
                        $user->update();
                        self::$_render = "Vos informations ont été modifier!." . PHP_EOL;
                        
                }
                    
            }
                 
        }            
}
        
        
        
        
?>