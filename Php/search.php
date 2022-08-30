<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="insert.css">
</head>
<body>
	<table>
	<tr>
		<th>NAME</th>
		<th>DESCRIPTION</th>
		<th>STATUS</th>
		<th>DATE</th>
		<th>CATEGORY</th>
		</tr>
<?php
$conn = mysqli_connect("localhost","root","","id8658476_recordsportal") or die ("Error connecting to database:".mysqli_error());
$search=$_POST["bugid"];
$category = $_POST["bugid2"];
$query = "SELECT Name,Description,Status,Date,Category FROM Recordss WHERE Name='$search' or Category = '$category'";
$results = mysqli_query($conn,$query);
if ($results-> num_rows > 0)
	{
		while($row=$results -> fetch_assoc())
		{
			echo"<tr><td>". $row["Name"]."</td><td>"
								.$row["Description"]."</td><td>"
								.$row["Status"]."</td><td>"
								.$row["Date"]."</td><td>"
								.$row["Category"]."</td></tr>";
		}
	}
		else
		 {
		 	echo "No results found";

		 }

?>
</table>
</body>
</html>