<?php
include('config.php');
	header("refresh:5; url = addrecord.html");
	$name = $_POST['ward'];
	$id = $_POST['roomNum'];
	$sal = $_POST['floor'];
	
	$sql = "insert into room values ('$id', '$name', '$sal')";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>New Room added Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>