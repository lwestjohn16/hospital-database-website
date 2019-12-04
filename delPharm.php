<?php
include('config.php');
	header("refresh:5; url = deleterecord.html");
	$id = $_POST['pharmId'];
	
	$sql = "delete from pharmacist where phid = '$id'";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>Pharmacist deleted Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>