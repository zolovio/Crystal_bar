<?php
  require_once("../connect.php");
  if(isset($_POST['id']) && isset($_POST['quantity']) && isset($_POST['catid'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
    $id = htmlentities($id);

    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    $quantity = htmlentities($quantity);

    $catid = mysqli_real_escape_string($con,$_POST['catid']);
    $catid = htmlentities($catid);

    $query3 = "SELECT * FROM cart where product_id = '$id'";
    $run3 = mysqli_query($con, $query3);
    if (mysqli_num_rows($run3) > 0) {
      $query="UPDATE cart SET cat_id = '$catid',quantity = '$quantity' where product_id='$id'";
    }else{
      $query="INSERT INTO cart (product_id,cat_id,quantity) value ('$id','$catid','$quantity')";
    }
    if(mysqli_query($con,$query)){
      echo 1;
    }else{
      echo 0;
    }
    
  }
?>