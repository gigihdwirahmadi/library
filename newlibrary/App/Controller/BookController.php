<?php
namespace newlibrary\App\Controller;
use newlibrary\app\core\Router;
use newlibrary\App\Model\BookModel;
use newlibrary\App\Core\View;
class BookController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new BookModel();
    }
    public function index(){
        View::render('Book/index', $this->header->all());
          
 }
 public function add(){
    View::render('Book/add', '');
      
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
        Router::redirect('\public\Bookindex');
      
}
    public function login(){
        View::render('login',"");
 }
 public function update($id){
    View::render('Book/update', $this->header->find($id));
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
       Router::redirect("\public\Bookindex");

    }
    public function delete(){
        $id= $_POST['id'];
       $this->header->delete($id);
       Router::redirect("\public\Bookindex");
    }
}