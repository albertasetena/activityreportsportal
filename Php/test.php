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
	$connection = mysqli_connect("localhost","root","","bugsportal");
	if(!$connection)
				{
				die("Couldnt connect");
				}
			else
			{
				$sql = "INSERT INTO records (Name,Description,Status,Date,Category) VALUES ('$name','$description','$status','$date','$category')";
				$results = mysqli_query ($connection,$sql)
				if ($results = true)
				{
					echo "<p>data successfully entered<p>".'<br>'; 
					echo '<img src="../img/data.png" alt="DATA SAVED">'.'<br>';
					echo '<a href="../index.php">Click here to back to View record</a>'; 
				}
				else
				{
					echo "not successful";
				}
			}
		?>
</div>

</body>
</html>