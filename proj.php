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

	$custNu = $_POST['custnum'];
	$custNum = (int)$custNu;

	$custCity = $_POST['city'];

	$amountOwe = $_POST['amount'];
	$amountOwed = (float)$amountOwe;

	$payDate = $_POST['paydate'];

	
	
	$conn = mysqli_connect('localhost', $user, $pw, $user) or die("Could not connect");
	
	$result = mysqli_query($conn, "DROP TABLE facultyTable") or die("table could not be deleted");
	
	$sql= "CREATE TABLE facultyTable(
	TicketNumber INT AUTO_INCREMENT,
	Name VARCHAR(50),
	Building VARCHAR(30),
	RoomNum INT,
	Type VARCHAR(30),
	DateSubmitted DATETIME,
	Urgency VARCHAR(30),
	Technician VARCHAR(30),
	Status VARCHAR(30),
	
	PRIMARY KEY(TicketNumber) );";
	
	$result = mysqli_query($conn, $sql) or die("Result could not run.");
	
	$sql= "CREATE TABLE classroomTable(
	TicketNumber INT AUTO_INCREMENT,
	Name VARCHAR(50),
	Building VARCHAR(30),
	RoomNum INT,
	Type VARCHAR(30),
	DateSubmitted DATETIME,
	Urgency VARCHAR(30),
	Technician VARCHAR(30),
	Status VARCHAR(30),
	WhenToDo DATETIME,
	
	PRIMARY KEY(TicketNumber) );";
	
	$result = mysqli_query($conn, $sql) or die("Result could not run.");
	
	$sql= "CREATE TABLE dormTable(
	TicketNumber INT AUTO_INCREMENT,
	Name VARCHAR(50),
	OperatingSys VARCHAR(30),
	RoomNum INT,
	Type VARCHAR(30),
	DateSubmitted DATETIME,
	Urgency VARCHAR(30),
	Technician VARCHAR(30),
	Status VARCHAR(30),
	
	PRIMARY KEY(TicketNumber) );";

	$result = mysqli_query($conn, $sql) or die("Result could not run.");
	
	?>
</body>
</html>