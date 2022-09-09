<?php

if (isset($_POST['submit'])) {
		$num = 1;
		$quant = $_POST['quant'];
		$size = $_POST['size'];
		$color = $_POST['color'];

	$con = new mysqli("localhost","root","","products_db");
	if($con->connect_error) {
		die('connection failed : '.$con->connect_error);
	}else {
		// $data = $_POST;
		// echo "<pre>";
		// var_dump($data);
		$count = count($size);
		for ($i=0; $i < $count ; $i++) {
			for ($j=0; $j < $quant[$i]; $j++) { 
				// code...
			
			$sql = "INSERT INTO `products` (`Quantity`, `size`, `Color`) VALUES ( 1, '{$size[$i]}', '{$color[$i]}')";
			$con->query($sql);
			}

		}
		echo "<script>history.back()</script>";
	}
}

?>