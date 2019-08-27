<?php
	include 'header.php';
?>

		<h2>PHP Overwriting File</h2>
		<p>Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.</p>
		<p>
			<b>newfile.txt</b><br>
			<?php
			$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
			$txt = "Mickey Mouse\n";
			fwrite($myfile, $txt);
			$txt = "Minnie Mouse\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			?> 
		</p><br>
	</div>
</body>
</html>
