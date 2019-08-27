<!DOCTYPE html>
<html>
<head>
	<title>Boolean</title>
</head>
<body>
	<?php 

		$var1 = true;
		$var2 = true;
		$var3 = "achi";


	 ?>

	 <?php echo "variable 1: ". $var1; ?><br>
	 <?php echo "variable 2: ". $var2; ?><br>

	 <?php echo "Is variable 1 boolean? " .is_bool($var1); ?><br>
	 <?php echo "Is variable 3 boolean? ".is_bool($var2); ?><br>

	 <?php 

	 		if ($var2==false) {

	 			echo "Variable 2 is false";
	 		}
	 		else{
	 			echo "Variable 2 is true";
	 		}


	  ?>

</body>
</html>