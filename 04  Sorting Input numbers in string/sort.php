<!DOCTYPE html>
<html>
<head>
	<title>Sorting result</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<br><br>
		<h1>Result </h1>

<?php
	$n = $_POST['n'];
	$string = $_POST['string'];
	echo 'Total numbers : '.$n;
	echo '<br>Numbers : '.$string;

	$array = explode(",",$string);
	echo "<br><br>";
	echo "elements are : <br>";
	for($i=0;$i<$n;$i++){
		echo $array[$i]." ";
	}

	Echo "<br><br>Bubble sort";
	for($i=0;$i<$n-1;$i++){
		for($j=0;$j<$n-$i-1;$j++){
			if ($array[$j]>$array[$j+1]){
				$temp=$array[$j];
				$array[$j]=$array[$j+1];
				$array[$j+1]=$temp;
			}
		}
	}

	echo "<br>";
	echo "Sorted elements are : <br>";
	for($i=0;$i<$n;$i++){
		echo $array[$i]." ";
	}
?>

	</div>
</body>
</html>




