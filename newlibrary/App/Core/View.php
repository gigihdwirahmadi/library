<?php
namespace newlibrary\App\Core;

class View{
    public static function render($view,$data){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/'.$view.'.php';
        require_once __DIR__. '/../view/template/footer.php';

    }
}