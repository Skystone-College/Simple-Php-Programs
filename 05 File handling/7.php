<?php
	include 'header.php';
?>


<h2>7) Write to File - fwrite()</h2>
<p>The fwrite() function is used to write to a file.
The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.</p>
<p>
	New file created <b>newfile.txt</b><br>
	<?php
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "John Doe\n";
	fwrite($myfile, $txt);
	$txt = "Jane Doe\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	?>
</p><br>