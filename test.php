<?php
$list = array();
$month = date('m');
$year = date('Y');
$date = date('d')-1;
$l = $date - 4;

for($d=13; $d >=$l; $d--){

	echo $d;
	echo '<br>';
}


echo "<pre>";
print_r($list);
echo "</pre>";
?>