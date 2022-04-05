<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tech Ret PHP</title>
</head>

<body>
<?php
$user= "151_stu01";
	$pw = "4RbZ9Ha&";

	$techName = $_POST['formTech'];
	
	$conn = mysqli_connect('localhost', $user, $pw, $user) or die("Could not connect");

	$sql = "SELECT 
    *
	FROM classroomTable
	WHERE Technician= '$techName';";
		
	$result = mysqli_query($conn, $sql) or die("Result could not run" . mysqli_error($conn));	
	echo "<h3> Classroom Table Tickets </h3>";
	
	while($output = mysqli_fetch_array($result))
	{
		echo "<h5>Technician:</h5>";
		echo $output['Technician'];
		echo "<br>";
		echo "<h5>TicketNumber:</h5>";
		echo $output['TicketNumber'];
		echo "<br>";
		echo "<h5>Name:</h5>";
		echo $output['Name'];
		echo "<br>";
		echo "<h5>Building:</h5>";
		echo $output['Building'];
		echo "<br>";
		echo "<h5>Room Number:</h5>";
		echo $output['RoomNum'];
		echo "<br>";
		echo "<h5>Type of Issue:</h5>";
		echo $output['Type'];
		echo "<br>";
		echo "<h5>Date Submitted:</h5>";
		echo $output['DateSubmitted'];
		echo "<br>";
		echo "<h5>Urgency:</h5>";
		echo $output['Urgency'];
		echo "<br>";
		echo "<h5>Status:</h5>";
		echo $output['Status'];
	}
	
		$sql = "SELECT 
    *
	FROM facultyTable
	WHERE Technician= '$techName';";
	
	$result = mysqli_query($conn, $sql) or die("Result could not run" . mysqli_error($conn));	
	echo "<h3> Faculty Table Tickets </h3>";
	
	while($output = mysqli_fetch_array($result))
	{
		echo "<h5>Technician:</h5>";
		echo $output['Technician'];
		echo "<br>";
		echo "<h5>TicketNumber:</h5>";
		echo $output['TicketNumber'];
		echo "<br>";
		echo "<h5>Name:</h5>";
		echo $output['Name'];
		echo "<br>";
		echo "<h5>Building:</h5>";
		echo $output['Building'];
		echo "<br>";
		echo "<h5>Room Number:</h5>";
		echo $output['RoomNum'];
		echo "<br>";
		echo "<h5>Type of Issue:</h5>";
		echo $output['Type'];
		echo "<br>";
		echo "<h5>Date Submitted:</h5>";
		echo $output['DateSubmitted'];
		echo "<br>";
		echo "<h5>Urgency:</h5>";
		echo $output['Urgency'];
		echo "<br>";
		echo "<h5>Status:</h5>";
		echo $output['Status'];
	}
	
	
	$sql = "SELECT 
    *
	FROM dormTable
	WHERE Technician= '$techName';";
	
	$result = mysqli_query($conn, $sql) or die("Result could not run" . mysqli_error($conn));	
	echo "<h3> Dorm Table Tickets </h3>";
	
	while($output = mysqli_fetch_array($result))
	{
		echo "<h5>Technician:</h5>";
		echo $output['Technician'];
		echo "<br>";
		echo "<h5>TicketNumber:</h5>";
		echo $output['TicketNumber'];
		echo "<br>";
		echo "<h5>Name:</h5>";
		echo $output['Name'];
		echo "<br>";
		echo "<h5>Operating System:</h5>";
		echo $output['OperatingSys'];
		echo "<br>";
		echo "<h5>Room Number:</h5>";
		echo $output['RoomNum'];
		echo "<br>";
		echo "<h5>Date Submitted:</h5>";
		echo $output['DateSubmitted'];
		echo "<br>";
		echo "<h5>Urgency:</h5>";
		echo $output['Urgency'];
		echo "<br>";
		echo "<h5>Status:</h5>";
		echo $output['Status'];
	}
	?>
</body>
</html>