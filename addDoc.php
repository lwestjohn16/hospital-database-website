<?php
include('config.php');
	header("refresh:5; url = addrecord.html");
	$name = $_POST['docName'];
	$id = $_POST['docId'];
	$sal = $_POST['docSal'];
	
	$sql = "insert into doctor values ('$id', '$name', '$sal')";
	echo "<body bgcolor='green'>";
	if(mysqli_query($conn,$sql)){
		echo "<p>New Doctor added Successfully</p>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "</body>";
?>