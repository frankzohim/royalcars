<?php
namespace app\Controllers;
require_once "../bootstrap.php";
use app\Models\Users;
require "../app/Models/Users.php";

//Function that allows you to create a user

  if(isset($_POST['name'])){

      $user=new Users();
      $user->setName($_POST['name']);
      $user->setLastName($_POST['lastname']);
      $user->setEmail($_POST['email']);
      $user->setRole($_POST['account-type']);
      $user->setPassword($_POST['password']);
      $user->setNumberPhone($_POST['phone']);
      $entityManager->persist($user);
      $entityManager->flush();

  
}