<!DOCTYPE html>
<html>
<head>
	<title>Visiter counter page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container"><br>
	<h1> YOU ARE VISITING THIS PAGE</h1>
	<?php
		$handle = fopen("counterFile.txt", "r+");
		if(!$handle){
			echo "could not open the file" ;
			$handle = fopen("counterFile.txt", "w");
			echo "\nNew counter file created";
		}
		
		$counter = ( int ) fread ($handle,20) ;
		fclose ($handle) ;
		$counter++ ;
		echo"\n <strong> you are visitor no ".  $counter . "   " ;
		$handle =  fopen("counterFile.txt", "w" ) ;
		fwrite($handle,$counter) ;
		fclose ($handle) ;
		
	?>

	<!--
		If you are facing the following error
			could not open the file New counter file created you are visitor no 1 
		that means you have not granted permission to read and write file for other programs
		to do that create file "counterFile" in same directory and right click and properties
		RightClick -> Properties -> Permissions -> Others -> Read and Write
	-->

	</div>

</body>
</html>
