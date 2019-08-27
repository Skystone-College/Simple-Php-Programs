<?php
	include 'header.php';
?>

		<h2>3) Read File - fread()</h2>
		<p>The fread() function reads from an open file.The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.</p>
		<p>
			Reading file by fread().
			<?php 
			$fr = fopen("fread.txt","r") or die("Unable to open file");
			fread($fr,filesize("fread.txt"));
			fclose("fread.txt");				
			?>
		</p><br>
	</div>
</body>
</html>
