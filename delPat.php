<?php
include('config.php');
	header("refresh:5; url = deleterecord.html");
	$id = $_POST['patId'];
	
	$sql = "delete from patient where pid = '$id'";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>Patient deleted Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>