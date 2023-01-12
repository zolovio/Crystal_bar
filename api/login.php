<?php 
ob_start();
session_start();
require_once("../connect.php");

if(isset($_POST['email']) && isset($_POST['password'])){

  $email = mysqli_real_escape_string($con,$_POST['email']);
  $email = htmlentities($email);

  $password = mysqli_real_escape_string($con,$_POST['password']);
  $password = htmlentities($password);

  $emailquery ="select * from user where email='$email'";
  $equery = mysqli_query($con,$emailquery);
  $emailcount= mysqli_num_rows($equery);

  
  if($emailcount){

    $email_pass = mysqli_fetch_assoc($equery);
    $db_pass = $email_pass['password'];
    $userid = $email_pass['userid'];
    $pass_decode= password_verify($password, $db_pass);

    if($pass_decode){
      $_SESSION["crbadminid"]= $userid;
        $message=array('level'=>1,'userdata'=>$userid);
        echo $result=json_encode($message);
    }else{
      echo 2;
    }
  }else{
    echo 3;
  }
}
?>