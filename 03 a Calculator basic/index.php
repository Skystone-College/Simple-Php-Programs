<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<!--

1)Study and installation of php
2)Study of basic programming of php
3)WAP for advanced calculator / converter
4)WAP for sorting arrays in AO and DO 
-->
<div class="container">
	<h1>Calculator</h1>
	<form  method="GET">
		number1 : <input type="text" name="num1" placeholder="number1"><br>
		number2 : <input type="text" name="num2" placeholder="number2"><br>
		<select name="operator">
			<option>None</option>
			<option>ADD</option>
			<option>SUB</option>
			<option>MUL</option>
			<option>DIV</option>
		</select><br>
		<button class="btn" type="submit" name="submit" value="submit">Calculate</button>
	</form>

	<div class="container">
		<p>The answer is : </p>
		<?php
			if (isset($_GET['submit'])){
				$num1 = $_GET['num1'];
				$num2 = $_GET['num2'];
				$operator = $_GET['operator'];
				switch($operator){
					case "None":
						echo "You need to select a method";
						break;
					case "ADD":
						echo $num1 + $num2;
						break;
					case "SUB":
						echo $num1 - $num2;
						break;
					case "MUL";
						echo $num1 * $num2;
						break;
					case "DIV";
						echo $num1 / $num2;
						break;
				}
			}

		?>
	</div>
</div>
</body>
</html>