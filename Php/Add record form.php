<!-- REcords in the database-->
<?php
session_start();
 if (isset($_SESSION['password']))
 {
 }
 else{
 	header("Location: LOGIN.php");
 }
 ?>
<!DOCTYPE html>
<html oncontextmenu="return false">
<head>
	<title>Report Form</title>
	<link rel="stylesheet" type="text/css" href="../css/Add record form.css">
	<link rel="shortcut Icon" href="../img/QCCl.png">
</head>
<body>	
		<div class="header">
			<img src="../img/QCCISbug.png" id="QCCISbug" alt="QCCISBUG">
			<a href="../index.php" id="Bugs">Bugs Recorded</a>
		</div>
		<form action="../Php/insert.php" method="POST" class="frap">
			<div id="newcon">
				<strong id="new">Add Record</strong>
			</div>
			<div id="subcon">
			<strong id="sublabel"><label for="Subj">Bug Name</label></strong>
			<div id="Subject" ><input type="text" name="name" placeholder="eg. Malware" required="required"></div>
			</div>
			<div id="Descon">
			<strong  id="Description"><label for="textare"> Description</label></strong>
			<div id="textarea"><textarea placeholder="Describe the effects of the Bug" name="desc" required="required"></textarea></div>
			</div>
			<div id="stacon">	
				<strong id="stalabel"><label for="stala">Status</label></strong>
				<select id="stala" required="required" name="status">
					<option></option>
					<option value="Fixed" required="required" >Fixed</option>
					<option value="Unfixed" required="required">Unfixed</option>
				</select>
				</div>
			</div>
			<div id="Dacon">	
				<strong id="dabel"><label for="dab">Date</label></strong>
				<div id="Date" >
				<input type="date"  name="date"  id="date">
				</div>
				<div id="Clacon">
					<strong id="clable" >Category</strong>
					<select required="required" name="category">
						<option></option>
						<option id="Software" value="Software">Software</option>
						<option id="Hardware" value="Hardware">Hardware</option>
						<option id="Hardware" value="Network">Network</option>
					</select>
				</div>
			</div>
			<input type="Submit" name="Submit" value="SAVE" id="SUBMIT">
		</form>
		<footer> Copyright © 2018 | ISD Report Portal </footer>
</body>
</html>