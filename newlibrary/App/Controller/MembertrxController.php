<?php
namespace newlibrary\App\Controller;
use newlibrary\app\core\Router;
use newlibrary\App\Model\BookModel;
use newlibrary\App\Core\View;
class MembertrxController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new BookModel();
    }
    public function index(){
        View::render('Membertrx/index', $this->header->all());
          
 }
 public function add(){
    View::render('Membertrx/add', '');
      
}
public function postadd(){
    $data= [
        'isbn' => $_POST['isbn'],
        'title' => $_POST['title'],
        'synopsis' =>$_POST['synopsis'],
        'author' =>$_POST['author'],
        'publisher' =>$_POST['publisher'],
        'category' =>$_POST['category'],
        'language' =>$_POST['language']
        ];
        $this->header->insert($data);
        Router::redirect('\public\Membertrxindex');
      
}
    public function login(){
        View::render('login',"");
 }
 public function update($id){
    View::render('Membertrx/update', $this->header->find($id));
}
 public function postupdate(){
    $data= [
        'id' => $_POST['id'],
        'isbn' => $_POST['isbn'],
        'title' => $_POST['title'],
        'synopsis' =>$_POST['synopsis'],
        'author' =>$_POST['author'],
        'publisher' =>$_POST['publisher'],
        'category' =>$_POST['category'],
        'language' =>$_POST['language']
        ];
        try{
        $this->header->update($data);
        }
        catch(\Throwable $th){
            echo $th->getMessage();
        }
       Router::redirect("\public\Membertrxindex");

    }
    public function delete(){
        $id= $_POST['id'];
       $this->header->delete($id);
       Router::redirect("\public\Membertrxindex");
    }
}