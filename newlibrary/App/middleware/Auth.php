<?php
namespace miniframework\App\Middleware;
use miniframework\App\Core\Router;
class Auth{
    function before(): void{
        if ($_SESSION['auth']==null){
            Router::redirect('\public\login');
        }
    }
}