<?php 
use newlibrary\App\Controller\HomeController;
use newlibrary\App\Controller\LibrarianController;
use newlibrary\App\Controller\SubscriptionController;
use newlibrary\App\Controller\BookController;
use newlibrary\App\Controller\MemberController;
use newlibrary\App\Controller\MembertrxController;
use newlibrary\App\Core\Router;
use newlibrary\App\Middleware\Auth;
use newlibrary\App\Middleware\Guest;
require_once __DIR__. '/../vendor/autoload.php';
session_start();
Router::addRoute('GET','/', HomeController::class, 'index',[] );
Router::addRoute('GET','/login', HomeController::class, 'login',[] );
Router::addRoute('POST','/postlogin', HomeController::class, 'postlogin',[] );
//book
Router::addRoute('GET','/Bookindex', BookController::class, 'index',[] );
Router::addRoute('GET','/addbook', BookController::class, 'add',[] );
Router::addRoute('GET','/updatebook/:id', BookController::class, 'update',[] );
Router::addRoute('POST','/postaddbook', BookController::class, 'postadd',[] );
Router::addRoute('POST','/postupdatebook', BookController::class, 'postupdate',[] );
Router::addRoute('POST','/deletebook', BookController::class, 'delete',[] );
//librarian
Router::addRoute('GET','/librarianindex', LibrarianController::class, 'index',[] );
Router::addRoute('GET','/addlibrarian', LibrarianController::class, 'add',[] );
Router::addRoute('GET','/updatelibrarian/:id', LibrarianController::class, 'update',[] );
Router::addRoute('POST','/postaddlibrarian', LibrarianController::class, 'postadd',[] );
Router::addRoute('POST','/postupdatelibrarian', LibrarianController::class, 'postupdate',[] );
Router::addRoute('POST','/deletelibrarian', LibrarianController::class, 'delete',[] );
//member
Router::addRoute('GET','/Memberindex', MemberController::class, 'index',[] );
Router::addRoute('GET','/addmember', MemberController::class, 'add',[] );
Router::addRoute('GET','/updatemember/:id', MemberController::class, 'update',[] );
Router::addRoute('POST','/postaddmember', MemberController::class, 'postadd',[] );
Router::addRoute('POST','/postupdatemember', MemberController::class, 'postupdate',[] );
Router::addRoute('POST','/deletemember', MemberController::class, 'delete',[] );
Router::run();
//subscription
Router::addRoute('GET','/Subscriptionindex', SubscriptionController::class, 'index',[] );
Router::addRoute('GET','/addsubscription', SubscriptionController::class, 'add',[] );
Router::addRoute('GET','/updatesubscription/:id',  SubscriptionController::class, 'update',[] );
Router::addRoute('POST','/postaddsubscription',  SubscriptionController::class, 'postadd',[] );
Router::addRoute('POST','/postupdatesubscription',  SubscriptionController::class, 'postupdate',[] );
Router::addRoute('POST','/deletesubscription',  SubscriptionController::class, 'delete',[] );
//membertrx
Router::addRoute('GET','/Membertrxindex', MembertrxController::class, 'index',[] );
Router::addRoute('GET','/addmembertrx', MembertrxController::class, 'add',[] );
Router::addRoute('GET','/updatemembertrx/:id',  MembertrxController::class, 'update',[] );
Router::addRoute('POST','/postaddmembertrx',  MembertrxController::class, 'postadd',[] );
Router::addRoute('POST','/postupdatemembertrx',  MembertrxController::class, 'postupdate',[] );
Router::addRoute('POST','/deletemembertrx',  MembertrxController::class, 'delete',[] );
Router::run();