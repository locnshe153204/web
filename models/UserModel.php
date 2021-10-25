<?php
class UserModel {
  public function getUser(){
    $con = mysqli_connect("localhost","root","","web");
    mysqli_set_charset($con,'utf8');
    if (mysqli_connect_error()){
      echo"Connect error: " . mysqli_connect_error();
    }
    $result= $con -> query("SELECT * FROM User");
    $posts = array();
    if($result ->num_rows >0) {
      while ($post = mysqli_fetch_assoc($result)) {
        $posts[] = $post;
      }
    }

    return $posts;
  }

  public function addUser($data){
    $con = mysqli_connect("localhost","root","","web");
    mysqli_set_charset($con,'utf8');
    if (mysqli_connect_error()){
      echo"Connect error: " . mysqli_connect_error();
    }
    $result= $con -> query("SELECT username FROM User WHERE username=?");
    if($result ->num_rows >0) {
        echo "This account have exist";
    } else {
    $results= $con -> query("INSERT INTO User (username,password,fullname,emails,phone) VALUES (?,?,?,?,?)");
    }
  }

  public function loginUser($data){
    $con = mysqli_connect("localhost","root","","web");
    mysqli_set_charset($con,'utf8');
    if (mysqli_connect_error()){
      echo"Connect error: " . mysqli_connect_error();
    }
    $result= $con -> query("SELECT * FROM User");
    $posts = array();
    while ($post = mysqli_fetch_assoc($result)){
        $posts[]=  $post;
    }
  //  echo $posts[0]['username'];
    return $posts;
  }

}
 ?>
