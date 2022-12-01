<?php
namespace newlibrary\App\Controller;
use newlibrary\app\core\Router;
use newlibrary\App\Model\SubscriptionModel;
use newlibrary\App\Core\View;
class SubscriptionController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new SubscriptionModel();
    }
    public function index(){
        View::render('Subscription/index', $this->header->all());
          
 }
 public function add(){
    View::render('Subscription/add', '');
      
}
public function postadd(){
    $data= [
        'title'=>$_POST['title'],
        'month'=>$_POST['month'],
        'price'=>$_POST['price'],
        'is_active'=>$_POST['is_active']
        ];
        $this->header->insert($data);
        Router::redirect('\public\Subscriptionindex');
      
}
    public function login(){
        View::render('login',"");
 }
 public function update($id){
    View::render('Subscription/update', $this->header->find($id));
}
 public function postupdate(){
    $data= [
        'id'=>$_POST['id'],
        'title'=>$_POST['title'],
        'month'=>$_POST['month'],
        'price'=>$_POST['price'],
        'is_active'=>$_POST['is_active']
        ];
        try{
        $this->header->update($data);
        }
        catch(\Throwable $th){
            echo $th->getMessage();
        }
       Router::redirect("\public\Subscriptionindex");

    }
    public function delete(){
        $id= $_POST['id'];
       $this->header->delete($id);
       Router::redirect("\public\Subscriptionindex");
    }
}