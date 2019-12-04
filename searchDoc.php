<?php
include('config.php');
	header("refresh:10; url = index.html");

	$name = $_POST['docName'];
	$id = $_POST['docId'];
	$sal = $_POST['docSal'];
	
	$sql = "select * from doctor where sid = '$id' or salary = '$sal' or name like '%$name%'";
	$result = mysqli_query($conn,$sql);

	echo "<body bgcolor='green'>";
	echo "<h1>Doctor Information</h1>";
	echo "<p>";
	echo "<b>Your search result is:</b>";
	echo "<br>";
	echo "<br>";
	echo "<table border = 1 bgcolor = 'white'>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Salary</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>" .$row["sid"]. "</td>";
			echo "<td>" .$row["name"]. "</td>";
			echo "<td>" .$row["salary"]. "</td>";
			echo "</tr>";
		}
	}else
	{
		echo "No results found";
	}
	echo "</table>";
	echo "</p>";
	echo "</body>";

?>