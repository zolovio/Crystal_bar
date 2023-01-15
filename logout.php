<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else { 
 session_destroy(); 
} 
?>

<script>
	location.href="login";
</script>