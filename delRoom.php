<?php
include('config.php');
	header("refresh:5; url = deleterecord.html");
	$id = $_POST['roomNum'];
	
	$sql = "delete from room where number = '$id'";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>Room deleted Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>