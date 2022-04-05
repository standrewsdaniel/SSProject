<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Classroom Php</title>
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

	$currentDateTime = date('Y-m-d H:i:s');
	
	$whenToDo = $_POST['formWhenToDo'];
	
	$conn = mysqli_connect('localhost', $user, $pw, $user) or die("Could not connect");
	
	//$result = mysqli_query($conn, "DROP TABLE classroomTable") or die("table could not be deleted");
	
	$sql= "CREATE TABLE classroomTable(
	TicketNumber INT AUTO_INCREMENT,
	Name VARCHAR(50),
	Building VARCHAR(20),
	RoomNum INT,
	Type VARCHAR(20),
	DateSubmitted VARCHAR(30),
	Urgency VARCHAR(30),
	Technician VARCHAR(30),
	Status VARCHAR(15),
	WhenToDo VARCHAR(5),
	
	PRIMARY KEY(TicketNumber) );";
	
	$result = mysqli_query($conn, $sql) or die("Result could not run.");
	
	$technician = "Unassigned";
	$status = "open";
	$urgency = "High";
	
	$sql = "INSERT INTO classroomTable(Name, Building, RoomNum, Type, DateSubmitted, Urgency, Technician, Status, WhenToDo) VALUES ('$name', '$building', '$roomNum', '$type', '$currentDateTime', '$urgency', '$technician', '$status', '$whenToDo')";
						
	if (mysqli_query($conn, $sql)) 
	{
  		echo "New ticket created successfully for classroom.";
	} else 
	{
  		echo "Ticket Not Submitted for classroom.";
	}	
	mysqli_close($conn);
	?>
</body>
</html>