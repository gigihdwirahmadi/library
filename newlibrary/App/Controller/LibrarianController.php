<?php
namespace newlibrary\App\Controller;
use newlibrary\app\core\Router;
use newlibrary\App\Model\LibrarianModel;
use newlibrary\App\Core\View;
class LibrarianController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new LibrarianModel();
    }
    public function index(){
        View::render('librarian/index', $this->header->all());
          
 }
 public function add(){
    View::render('librarian/add', '');
      
}
public function postadd(){
    $data= [
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'email' =>$_POST['email'],
        'avatar' =>$_POST['avatar'],
        'password' =>password_hash($_POST['password'],PASSWORD_DEFAULT)
        ];
        $this->header->insert($data);
        Router::redirect('\public\librarianindex');
      
}
    public function login(){
        View::render('login',"");
 }
 public function update($id){
    View::render('librarian/update', $this->header->find($id));
}
 public function postupdate(){
    $data= [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'email' =>$_POST['email'],
        'avatar' =>$_POST['avatar'],
        'password' =>password_hash($_POST['password'],PASSWORD_DEFAULT)
        ];
        try{
        $this->header->update($data);
        }
        catch(\Throwable $th){
            echo $th->getMessage();
        }
       Router::redirect("\public\librarianindex");

    }
    public function delete(){
        $id= $_POST['id'];
       $this->header->delete($id);
       Router::redirect("\public\librarianindex");
    }
}