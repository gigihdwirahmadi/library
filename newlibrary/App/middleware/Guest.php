<?php
namespace miniframework\App\Middleware;
use miniframework\App\Core\Router;
class Guest{
    function before(): void{
        if (@$_SESSION['auth']){
            Router::redirect('\public');
        }
    }
}