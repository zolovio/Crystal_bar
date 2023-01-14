<?php
  require_once("../connect.php");
  if(isset($_POST['name'])){

  $name = mysqli_real_escape_string($con,@$_POST['name']);
  $name = htmlentities($name);

  $number = mysqli_real_escape_string($con,@$_POST['number']);
  $number = htmlentities($number);

  $email = mysqli_real_escape_string($con,@$_POST['email']);
  $email = htmlentities($email);

  $address = mysqli_real_escape_string($con,@$_POST['address']);
  $address = htmlentities($address);

  $netprice = mysqli_real_escape_string($con,@$_POST['netprice']);
  $netprice = htmlentities($netprice);


  $squery = "select * from bills order by 1 desc";
  $runs = mysqli_query($con,$squery);
  if(mysqli_num_rows($runs) > 0){
    $rows = mysqli_fetch_array($runs);
    $lid = $rows['id'];
  }else{
    $lid = 0;
  }

  $billid = "QTN".date("Y").$lid;


  $query2="INSERT INTO bills (bill_id,name,mobile,email,address,total,status) value ('$billid','$name','$number','$email','$address','$netprice',1)";

    if(mysqli_query($con,$query2)){
      $query3 ="select * from cart order by 1 desc";
      $run3 = mysqli_query($con,$query3);
      while($row3 = mysqli_fetch_array($run3)){
        $product_id = $row3['product_id'];
        $cat_id = $row3['cat_id'];
        $quantity = $row3['quantity'];

        $query4="insert into billproduct (bill_id,product_id,cat_id,quantity) values ('$billid','$product_id','$cat_id','$quantity')";
        mysqli_query($con,$query4);
        
        $query5 = "TRUNCATE TABLE cart";
        mysqli_query($con,$query5);
      }
      $message=array('status'=>1,'userdata'=>$billid);
      echo $result=json_encode($message);
    }else{
      $message=array('status'=>0);
      echo $result=json_encode($message);
    }
  }
?>