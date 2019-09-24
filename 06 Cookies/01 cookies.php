<!DOCTYPE html>

<html>
<head>
	<title>Cookies</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br><h1>Program to demonstrate cookies</h1>

		<h2>What is a Cookie?</h2>
		<p>
		A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</p>

		<h2>1)Create Cookies / Retrieve the cookie</h2>
		<div class="container">
		
		
			<?php
				$cookie_name = "user1";
				$cookie_value = "Aditya Mahajan";
				setcookie($cookie_name, $cookie_value, time()+(86400 * 30), "/","",0);
			?>

			<p>So we have set the cookie. lets see if that worked....</p>

			<?php
				if(!isset($_COOKIE[$cookie_name])){
					echo "Cookie '" . $cookie_name . "' is not set!!!";
				} else {
					echo "Cookie '" . $cookie_name . "' is set!!! <br>";
					echo "Value is: " . $_COOKIE[$cookie_name]; 
				}
			?>

			<p><b>Note:</b> To see the value of the cookie you need to reload the page.</p>
		
		</div>


		<h2>2)Check if cookies are enabled</h2>	
		<div class="container">
			<?php
				if (count($_COOKIE) > 0) {
					echo "Cookies are enabled";
				} else {
					echo "Cookies are disabled";
				}
			?>
		</div>

		<h2>3) Modify a cookie value</h2>
		<div class="cotainer">
			<?php
				$cookie_name = "user2";
				$cookie_value = "Aditya mahajan new";
				setcookie($cookie_name, $cookie_value, time()+(86400 * 30), "/","",0	);
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

		<a href="02 cookies.php"><button class="btn bg-success">Next</button></a>
		</div>
	</div>

</body>
</html>