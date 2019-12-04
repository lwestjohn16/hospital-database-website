<?php
include('config.php');
	header("refresh:5; url = addrecord.html");
	$name = $_POST['ordCost'];
	$id = $_POST['ordNum'];
	$sal = $_POST['drug'];
	
	$sql = "insert into prescription values ('$id', '$name', '$sal')";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>New Prescription added Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>