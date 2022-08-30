<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/insert.css">
</head>
<body>
	<div class="wrap">
		<?php
			$name = $_POST["name"];
			$description = $_POST["desc"];
			$status = $_POST["status"];
			$date = $_POST["date"];
			$category = $_POST["category"];
			$connection = mysqli_connect("localhost","root","","id8658476_recordsportal");
			$sql = "INSERT INTO records (Name,Description,Status,Date,Category) VALUES ('$name','$description','$status','$date','$category')";
			$result = mysqli_query($connection,$sql);

					if( $result = true)
					{
						echo "<p>data successfully entered<p>".'<br>'; 
						echo '<div class ="dataentered"><img src="../img/data.png" alt="DATA SAVED"></div>'.'<br>';
						echo '<a href="../index.php">Click here to back to View record</a>'; 
					}
					else
					{
						echo "Sorry data entry has failed";
					}
		?>
	</div>
	<footer> Copyright © 2018 | ISD Report Portal</footer>
</body>
</html>