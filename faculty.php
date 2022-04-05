<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty Tickets</title>
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
	
	$conn = mysqli_connect('localhost', $user, $pw, $user) or die("Could not connect");
	
	$result = mysqli_query($conn, "DROP TABLE facultyTable") or die("table could not be deleted");
	
	$sql= "CREATE TABLE facultyTable(
	TicketNumber INT AUTO_INCREMENT,
	Name VARCHAR(50),
	Building VARCHAR(20),
	RoomNum INT,
	Type VARCHAR(20),
	DateSubmitted VARCHAR(30),
	Urgency VARCHAR(15),
	Technician VARCHAR(30),
	Status VARCHAR(10),
	PRIMARY KEY(TicketNumber) );";
	
	$result = mysqli_query($conn, $sql) or die("Result could not run." . mysqli_error($conn));
	
	$technician = "Unassigned";
	$status = "open";
	
	$sql = "INSERT INTO facultyTable(Name, Building, RoomNum, Type, DateSubmitted, Urgency, Technician, Status) VALUES ('$name', '$building', '$roomNum', '$type', '$currentDate', '$urgency', '$technician', '$status')";
						
	if (mysqli_query($conn, $sql)) 
	{
  		echo "New ticket created successfully for faculty.";
	} else 
	{
  		echo "Ticket Not Submitted for Faculty." . mysqli_error($conn);
	}	
	mysqli_close($conn);
	?>
</body>
</html>