<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty Update PHP</title>
</head>

<body>

<?php
	$user= "151_stu01";
	$pw = "4RbZ9Ha&";
	
	$tickID = $_POST['tickID'];
	$formTech = $_POST['formTech'];
	$formStat = $_POST['formStat'];

	$conn = mysqli_connect('localhost', $user, $pw, $user) or die("Could not connect");

	$sql = "UPDATE facultyTable SET Technician='$formTech' WHERE TicketNumber='$tickID'";

	if (mysqli_query($conn, $sql)) 
	{
  	echo "Technician updated successfully";
	} 
	else 
	{
  	echo "Error updating technician: " . mysqli_error($conn);
	}
	
	$sql = "UPDATE facultyTable SET Status='$formStat' WHERE TicketNumber='$tickID'";

	if (mysqli_query($conn, $sql)) 
	{
  	echo "Status updated successfully";
	} 
	else 
	{
  	echo "Error updating status: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	?>
	<br>
	<br>
	<a href = "main.html">Return to main page.</a>
	<br>
	<br>
	<a href = "facultyupdate.html">Return to faculty ticket update page.</a>
	
	
</body>
</html>