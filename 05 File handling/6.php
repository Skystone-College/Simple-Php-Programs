<?php
	include 'header.php';
?>



<h2>6) Create File - fopen()</h2>
<p>The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.

If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).</p>
<p>
	New file created <b>testfile.txt</b><br>
	<?php
	$myfile = fopen("testfile.txt", "w");
	?>
</p><br>