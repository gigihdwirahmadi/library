<?php
namespace newlibrary\App\Controller;
use newlibrary\app\core\Router;
use newlibrary\App\Model\MemberModel;
use newlibrary\App\Core\View;
class MemberController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new MemberModel();
    }
    public function index(){
        View::render('Member/index', $this->header->all());
          
 }
 public function add(){
    View::render('Member/add', '');
      
}
public function postadd(){
    $data= [
        'nik' => $_POST['nik'],
        'full_name' => $_POST['fullname'],
        'phone' =>$_POST['phone'],
        'addres' =>$_POST['addres'],
        'born_place' => $_POST['born_place'],
        'born_date' => $_POST['born_date'],
        'gender' =>$_POST['gender'],
        'country' =>$_POST['country'],
        'nationallity' =>$_POST['nationality'],
        'is_active' =>$_POST['is_active']
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
        'nik' => $_POST['nik'],
        'fullname' => $_POST['fullname'],
        'phone' =>$_POST['phone'],
        'addres' =>$_POST['addres'],
        'born_place' => $_POST['born_place'],
        'born_date' => $_POST['born_date'],
        'gender' =>$_POST['gender'],
        'country' =>$_POST['country'],
        'nationallity' =>$_POST['nationality'],
        'is_active' =>$_POST['is_active']
        ];
        try{
        $this->header->update($data);
        }
        catch(\Throwable $th){
            echo $th->getMessage();
        }
       Router::redirect("\public\Memberindex");

    }
    public function delete(){
        $id= $_POST['id'];
       $this->header->delete($id);
       Router::redirect("\public\Memberindex");
    }
}