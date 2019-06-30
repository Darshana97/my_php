<form action="post.php" method="POST">
	Please enter your password:<br><br>
	<input type="password" name="password">
	<input type="submit" value="Submit">
	


</form>



<?php

	$password = 'password';

	if (isset($_POST['password']) && !empty($_POST['password'])) {

		if ($_POST['password']==$password) {

			echo "correct";
			
		}
		else{

			echo "incorrect";
		}

	}



?>