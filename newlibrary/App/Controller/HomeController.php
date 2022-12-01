<?php
namespace newlibrary\App\Controller;
use newlibrary\app\core\Router;
use newlibrary\App\Model\Modell;
use newlibrary\App\Core\View;
class HomeController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new Modell();
    }
    public function index(){
        View::render('body', '');
          
 }
    public function login(){
        View::render('login',"");
 }
    public function postlogin(){
        $user = $this->header->findemail($_POST['username']);
        // if($user && password_verify($_POST['password'], $user->password)){
            if($_POST['password']== $user->password){
           $_SESSION['auth']= $user;
           Router::redirect('\public\librarianindex');
           return;
        }
        Router::redirect('\public\login');
    }
}