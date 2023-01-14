<?php
  session_start();
  require_once("../connect.php");
  if(isset($_POST['current']) && isset($_POST['newp']) && isset($_POST['confirm'])){

    $userid = $_SESSION["adminid"];

    $current = mysqli_real_escape_string($con,$_POST['current']);
    $current = htmlentities($current);

    $newp = mysqli_real_escape_string($con,$_POST['newp']);
    $newp = htmlentities($newp);

    $confirm = mysqli_real_escape_string($con,$_POST['confirm']);
    $confirm = htmlentities($confirm);

    $query ="select * from user where userid='$userid'";
    $run = mysqli_query($con,$query);
    $row = mysqli_fetch_array($run);
    $password = $row['password'];

    $pass_decode= password_verify($current, $password);
    if($pass_decode){

      if($newp===$confirm){
        $pass = password_hash($newp, PASSWORD_BCRYPT);
        $query="update user set userlink='$newp',password='$pass' where userid='$userid'";
        if(mysqli_query($con,$query)){
          echo 1;
        }else{
          echo 3;
        }
      }else{
        echo 2;
      }  

    }else{
      echo 0;
    }
  }
?>