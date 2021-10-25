<?php
class UserView {
  public function ShowAllUser($posts) {
    require_once "templates/listUser.php";
  }

  public function AddUser() {
    require_once "templates/addUser.php";
  }

  public function logIn() {
    require_once "templates/login.php";
  }

  public function notifyAddUser($status) {
    if($status) {
      echo "Add success ";
    } else {
      echo "fail";
    }
  }

  public function notifyLoginUser($status) {
    if($status == true) {
      echo "Login success ";
    } else {
      echo "fail";
    }
  }

}

 ?>
