<?php
	include 'header.php';
?>



<h2>5) Read Single Line - fgets()</h2>
<p>The fgets() function is used to read a single line from a file.</p>
<p>
	Following are file contents of <b>content.txt</b><br>
	<?php
	$contentFile = fopen("content.txt","r") or die("Unable to open file!");
	echo fgets($contentFile);
	fclose($contentFile);

	?>
</p><br>