
<?php


	function addition($x,$y){
		
		$x = $_POST['val1'];
		$y = $_POST['val2'];
		$add = $x+$y;
		return $add;
	}
		$z = addition(5,5);
		echo $z;
		
		

?>