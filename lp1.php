		<?php
		$wall_paper = "bg2.jpg";
		$conn = mysqli_connect("sql213.unaux.com","unaux_32514607","gsrjc5pf2t61","unaux_32514607_alm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$number = $_REQUEST['number'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO customer_credentials VALUES ('$username',
			'$number')";
		
		if(mysqli_query($conn, $sql))
		{
			echo "<body style='background-color:MistyRose;'></body>";
			echo "<p style='padding-top 20px;'><center>Welcome to ALMO $username</center></p>";
			echo "<form action='shop.php' method='post'>";
			echo "<p><center><input type= submit name='submit' value='Lets Start Shopping' size='50px'></center></p>";
			echo "</form>";
			//$str = "<p style='padding-top 20px;'><center>Welcome to ALMO $username</center></p>";
			//echo str_pad($str,100," ",STR_PAD_LEFT);
		} 
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<html>
			<head>
				<title>
				WELCOME PAGE
				</title>	
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
			</head>
			<body background="cbg.jpeg" width="80px">
				</body>
		</html