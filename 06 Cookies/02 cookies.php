

<!DOCTYPE html>

<html>
<head>
	<title>Cookies</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br><h1>Program to demonstrate cookies</h1>


		<h2>3) Modify a cookie value</h2>
		<div class="cotainer">
			<?php
				$cookie_name = "user1";
				$cookie_value = "Aditya mahajan new";
				setcookie($cookie_name, $cookie_value, time()+(86400 * 30), "/");
			?>

			<?php
			if(!isset($_COOKIE[cookie_name])){
				echo "Coookie named '" . $cookie_name . "' is not set !!";
			} else {
				echo "Coookie named '" . $cookie_name . "' is set. ";
				echo "Value is : " . $_COOKIE[$cookie_name]; 
			}
			?>
		</div>

		<h2>4)Delete Cookie</h2>
		<div class="cotainer">
			<?php
			setcookie("user","", time() + (86400 * 30));
			echo "Cookie 'user' is deleted";
			?>
		</div>
	</div>

</body>
</html>