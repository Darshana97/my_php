<!DOCTYPE html>
<html>
<head>
	<title>If Else</title>
</head>
<body>

	<?php 

		$score = 60;
		echo "Your score is: ".$score;
		echo "<br>";

	 ?>
	 <br>
	 <?php 

	 	if ($score>=75) {
	 		echo "Your grade is A";
	 	}
	 	elseif ($score>=65) {
	 		echo "Your grade is B";
	 	}
	 	elseif ($score>=55) {
	 		echo "Your grade is C";
	 	}
	 	elseif ($score>=35) {
	 		echo "Your grade is S";
	 	}
	 	else
	 	{
	 		echo "You are failed";
	 	}


	  ?>

</body>
</html>