<?php

	if (isset($_POST['Submit'])) {
		
	$yourname = $_POST['username'];
	$yourpassword = $_POST['password'];

	if ($yourname=="darshana" && $yourpassword=="achi") {

	 	echo "Login succesful";
	 } 
	 else{
	 	echo "invalid details";
	 }

	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<form action="post.php " method="post">
		Username: <input type="text" name="username"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" name="Submit">


	</form>


</body>
</html>