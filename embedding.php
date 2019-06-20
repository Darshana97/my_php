<?php

	if (isset($_POST['name'])) {

		$name = $_POST['name'];

		if (!empty($name)) {

			echo $sentence = $name.' woke up, and made a PHP tutorials ';

			
		}
		else{
			echo "please enter the name: ";
		}

		

		
	}



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
		<form action="embedding.php" method="POST">
			
			Type your name:<br><input type="text" name="name" value="<?php echo $_POST['name']; ?>"><br><br>
			<input type="submit" value="Submit"><br><br>

		</form>

		<textarea rows="7" cols="30"><?php  echo $sentence;  ?></textarea>

	

</body>
</html>