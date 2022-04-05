<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$user= "151_stu01";
	$pw = "4RbZ9Ha&";
	
	//Fields
	//Fields
	$name = $_POST['name'];

	$building = $_POST['building'];
	
	$roomNum = $_POST['roomNum'];

	$type = $_POST['formIssue'];

	$urgency = $_POST['formUrgency'];
	
	$technician = $_POST[''];
	
	$status = $_POST[''];
	
	$oS = $_POST['formOS'];

	$currentDateTime = date('Y-m-d H:i:s');
	
	$conn = mysqli_connect('localhost', $user, $pw, $user) or die("Could not connect");
	
	$result = mysqli_query($conn, "DROP TABLE dormTable") or die("table could not be deleted");
	
	$sql = "CREATE TABLE dormTable(
	TicketNumber INT AUTO_INCREMENT,
	Name VARCHAR(50),
	OperatingSys VARCHAR(40),
	RoomNum INT,
	Type VARCHAR(20),
	DateSubmitted VARCHAR(30),
	Urgency VARCHAR(15),
	Technician VARCHAR(20),
	Status VARCHAR(15),
	
	PRIMARY KEY(TicketNumber) );";

	$result = mysqli_query($conn, $sql) or die("Result could not run.");
	
	$technician = "Unassigned";
	$status = "open";
	$urgency = "Low";
	
	$sql = "INSERT INTO dormTable(Name, OperatingSys, RoomNum, Type, DateSubmitted, Urgency, Technician, Status) VALUES ('$name', '$oS', '$roomNum', '$type', '$currentDateTime', '$urgency', '$technician', '$status')";
						
	if (mysqli_query($conn, $sql)) 
	{
  		echo "New ticket created successfully for dorms.";
	} else 
	{
  		echo "Ticket Not Submitted for Dorms." . mysqli_error($conn);
	}	
	mysqli_close($conn);
	?>

</body>
</html>