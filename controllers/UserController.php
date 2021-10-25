<?php
class UserController {
  public function getUser(){
    require_once "models/UserModel.php";
    $userModel = new UserModel();
    $posts = $userModel ->getUser();

    require_once "views/UserView.php";
    $userView = new UserView();
    $userView ->ShowAllUser($posts);
  }

  public function AddUser() {
    require_once "views/UserView.php";
    $userView = new UserView();
    $userView -> AddUser();
  }

  public function doAddUser(){

      $username = $_POST['username'];
      $password = $_POST['password'];
      $fullname = $_POST['fullname'];
      $emails = $_POST['emails'];
      $phone = $_POST['phone'];


      // check data

      //end check data

      $data =array(
        'username' => $username,
        'password' => $password,
        'fullname' => $fullname,
        'emails'   => $emails,
        'phone'    => $phone
      );
      require_once "models/UserModel.php";
      $userModel = new UserModel();
      $status = $userModel->addUser($data);

      require_once "views/UserView.php";
      $userView = new UserView();
      $userView -> notifyAddUser($status);
  }

  public function LogInForm() {
    require_once "views/UserView.php";
    $userView = new UserView();
    $userView -> logIn();
  }

  public function LoginUser(){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data =array(
      'username' => $username,
      'password' => $password
    );
    require_once "models/UserModel.php";
    $userModel = new UserModel();
    $posts = $userModel->loginUser($data);

    $status = false;
    for ( $i=0;$i<count($posts);$i++){
      if($posts[$i]['username']==$data['username'] && $posts[$i]['password']==$data['password']) {
        session_start();
        $_SESSION['sessionUser'] =$posts[$i]['username'];
        $_SESSION['sessionPassword'] =$posts[$i]['password'];
        $status =true;
        require_once "views/UserView.php";
        $userView = new UserView();
        $userView -> notifyLoginUser($status);
      }
    }


  }
}
 ?>
