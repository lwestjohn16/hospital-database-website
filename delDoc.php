<?php
include('config.php');
	header("refresh:5; url = deleterecord.html");
	$id = $_POST['docId'];
	
	$sql = "delete from doctor where sid = '$id'";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>Doctor deleted Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>