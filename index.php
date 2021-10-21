<?php
$action =$_GET['action'];

require_once "controllers/UserController.php";
$userController = new UserController();

if($action == 'list') {
  $userController -> getUser();
}

if($action=='add') {
  $userController -> addUser();
}
if($action=='doAdd') {
  $userController -> doAddUser();
}

 ?>
