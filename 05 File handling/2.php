<?php
	include 'header.php';
?>
		
		
		<h2>2) Open File - fopen()</h2>
		<p>A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.</p>
		<p>
			Following are file contents of <b>modes.txt</b><br>
			<?php
				$modesfile = fopen("modes.txt", "r") or die("Unable to open file!");
				echo fread($modesfile, filesize("modes.txt"));
				fclose($modesfile);
			?>
		</p><br>
	</div>
</body>
</html>
