<?php
include('config.php');
	header("refresh:5; url = deleterecord.html");
	$id = $_POST['ordNum'];
	
	$sql = "delete from prescription where ordernum = '$id'";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>Prescription deleted Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>