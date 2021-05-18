<html>
	<head>
		<title>
			subbmision
		</title>
	</head>
	<body>
		<?php
		$nameErsali=$_POST["name"];
		$emailErsali=$_POST["email"];
		$commentErsali=$_POST["comment"];
		$file=fopen("ersali.txt","w");
		fwrite($file,$nameErsali.PHP_EOL.$emailErsali.PHP_EOL.$commentErsali);
		fclose($file);
		?>
		<center>
		thank you for your comment <strong><?php echo $_POST["name"]; ?><br></strong>
		Your email address is: <strong><?php echo $_POST["email"]; ?><br></strong>
		and your comment is: <strong><?php echo $_POST["comment"];?><br></strong>
		we will read your comment imediately&#10084;<br>
		<img src="blue.jpg"></center>
		<center><button onclick="goBack()" color=#CCEEFF>Go Back</button></center>
		<script>
		function goBack() {
		window.history.back();
		}
		</script>
	</body>
</html>