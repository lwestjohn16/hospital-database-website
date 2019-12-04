<?php
include('config.php');
	header("refresh:5; url = addrecord.html");
	$name = $_POST['patName'];
	$id = $_POST['patId'];
	$sal = $_POST['disease'];
	
	$sql = "insert into patient values ('$id', '$name', '$sal')";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>New Patient added Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>