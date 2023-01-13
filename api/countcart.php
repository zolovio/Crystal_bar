<?php
require_once("../connect.php");

	$query = "select * from cart";
	$run = mysqli_query($con,$query);
	$cart = mysqli_num_rows($run);
	if ($cart==0) {
		echo -1;
	}else{
		echo $cart;
	}

?>