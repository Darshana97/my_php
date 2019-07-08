<pre>
<?php

	$yourname = $_POST['username'];
	$yourpassword = $_POST['password'];

	if ($yourname=="darshana" && $yourpassword=="achi") {

	 	echo "Login succesful";
	 } 
	 else{
	 	echo "invalid details";
	 }

 ?>
 </pre>