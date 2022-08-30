<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
	<link rel="stylesheet" href="../css/log.css">
	
</head>
<body>
	<?php
		$password= $_POST['Securityname'];
		$connection = mysqli_connect("localhost","root","","recordsportal");
		$query = "SELECT password FROM securityname";
		$result = mysqli_query($connection,$query);
		$exists = true;
		if ($result-> num_rows > 0)
		{
			while($row=$result -> fetch_assoc())
				{
					if($password == $row["password"])
					{
						session_start();
						$_SESSION['password'] = $password;
						header("Location:../index.php");
						$exists = true;
						break;
					}
					else{
						$exists = false;
						}
				}
		} 
		if(!$exists){
			echo "<h2>Security Name does not exist in the database!</h2>".'<br>';
			echo '<div class ="error"><img src="../img/Blocked-PNG.png" alt="ACCESS DENIED"></div>';
			echo '<a href="LOGIN.php">" Click here to login the page "</a>';
			
		}
		mysqli_close($connection);
	?>
<footer> Copyright © 2018 | ISD Report Portal</footer>
</body>
</html>

