<?php
session_start();
 if (isset($_SESSION['password']))
 {
 }
 else{
 	header("Location: Php/LOGIN.php");
 }
 ?>
<!DOCTYPE html>
<html oncontextmenu="return false">
<head>
	<title>Bugs Portal</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="shortcut Icon" href="img/QCCl.png">
</head>
<body>
	
	<div class="wrap">
		<div id="QCC">
			<a href="index.php"><img src="img/QCCl.png" id="imgco"></a>
			<h2>QCC ISD Bugs Portal</h2>
			<form></form>
			<a href="Php/logout.php" id="log">Log Out</a>
		</div>
		<div class="container">
			<div class="header">
				<h3>Bugs Recorded</h3>
				<a href="Php/Add record form.php">Add Record +</a>
			</div>
			<div class="frap">
				<form class="searchco" action="index.php" method="POST">
					<strong ><label for="bugid">Bug Name :</label></strong>
					<input type="text" name="bugid" id="bugid">
					<strong ><label for="bugid2">Category :</label></strong>
					<input type="text" name="bugid2" id="bugid2">
					<input type="submit" name="Find now" value="Find now" id="Findnow">
				</form>
			</div>
			<table>
					<tr>
						<th>Id</th>
						<th>NAME</th>
						<th>DESCRIPTION</th>
						<th>STATUS</th>
						<th>DATE</th>
						<th>CATEGORY</th>
					</tr>
					<?php
					$name = "";
					$category = "";
					if($_POST){
					$name = $_POST["bugid"];
					$category = $_POST["bugid2"];
				}
					$sql = "";
					$conn = mysqli_connect("localhost","root","" ,"recordsportal" );
					if ($conn-> connect_error)
					{
						die("Connection failed:".$conn-> connect_error);
					}
					if($name!="" or $category!="")
					{
					$sql = "SELECT Id,Name,Dsc,Status,Date,Category FROM records WHERE Name='$name' or Category = '$category'";
				} else{
					$sql ="SELECT Id,Name,Dsc,Status,Date,Category from records";
				}
					$result = mysqli_query($conn,$sql);
					if ($result-> num_rows > 0)
					{
							while($row=$result -> fetch_assoc())
							{
								echo"<tr><td>".$row["Id"]."</td><td>"
								.$row["Name"]."</td><td>"
								.$row["Dsc"]."</td><td>"
								.$row["Status"]."</td><td>"
								.$row["Date"]."</td><td>"
								.$row["Category"]."</td></tr>";

							}
				   }
							else 
							{ 
					}
					$conn-> close();
					?>
			</table>
		</div>
	</div>
	<footer> Copyright © 2018 | ISD Report Portal </footer>
</body>
</html>
