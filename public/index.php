<?php
switch ($_SERVER['REQUEST_URI']){
    case '/':
        require '../views/homepage.php'; 
        break;
    case '/contact':
        require '../app/Controllers/Contact.php';
        break;
    case '/login-register':
        require '../views/pages/login-register.php';
        break;
    case '/register':
        require '../app/Controllers/UsersController/CreateUser.php';
        break;
    case '/cars-list':
        require '../app/Controllers/Car.php';
        break;
    default :
        header("HTTP/1.0 404 Not Found");
}

