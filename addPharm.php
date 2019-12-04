<?php
include('config.php');
	header("refresh:5; url = addrecord.html");
	$name = $_POST['pharmName'];
	$id = $_POST['pharmId'];
	$sal = $_POST['pharmSal'];
	
	$sql = "insert into pharmacist values ('$id', '$name', '$sal')";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>New Pharmacist added Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>