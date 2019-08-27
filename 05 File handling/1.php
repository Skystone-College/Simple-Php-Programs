<?php
	include 'header.php';
?>

<h2>1) readfile() Function</h2>
<p>The readfile() function reads a file and writes it to the output buffer.The readfile() function is useful if all you want to do is open up a file and read its contents.</p>
<p>
	Following are file contents of <b>content.txt</b><br>
	<?php
		echo readfile("content.txt");
		fclose("content.txt");
	?>
</p><br>



	</div>
</body>
</html>
