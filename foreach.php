<!DOCTYPE html>
<html>
<head>
	<title>Fore-Each</title>
</head>
<body>
	<?php 
		$job_categories = array("Accounting","Finance","It","Maketing","Sales");

		foreach ($job_categories as  $job_category) {

			echo $job_category;
			echo "<br>";
		}


	 ?>

	 <br>
	 <?php 

	 	$student = array("first_name"=>"Darshana","surname"=>"Senevirathna","age"=>22,"grade"=>"University");

	 	foreach ($student as $label => $mydetails) {

	 		echo $label." : ".$mydetails."<br>";
	 	}

	  ?>

</body>
</html>