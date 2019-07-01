<!DOCTYPE html>
<html>
<head>
	<title>User Defined Function</title>
</head>
<body>
	<?php 
		function get_month_name($monthval){

			switch ($monthval) {
				case 1:
					$month_name = "Duruthu";
					break;

				case 2:
					$month_name = "Navam";
					break;

				case 3:
					$month_name = "Madin";
					break;

				case 4:
					$month_name = "Bak";
					break;

				case 5:
					$month_name = "Vesak";
					break;

				case 6:
					$month_name = "Poson";
					break;

				case 7:
					$month_name = "Esala";
					break;
				
				default:
					$month_name = "Invalid month";
					break;
			}

			return $month_name;
		}

		echo get_month_name(5);
		echo "<br>";
		echo get_month_name(6);
		echo "<br>";
		echo get_month_name(7);
		echo "<br>";

		$domain_name = "bestjobslk.com";
		echo "Outside the function: {$domain_name} <br>";


		function myfunc(){

			//use global for local
			global $domain_name;


			echo "Inside Function: {$domain_name} <br>";

			//override
			$domain_name = "www.darshana.com";


		}

		myfunc();
		echo "outside function again: {$domain_name} <br>";

	 ?>

</body>
</html>