<?php
include('config.php');
	header("refresh:10; url = index.html");
	$name = $_POST['pharmName'];
	$id = $_POST['pharmId'];
	$sal = $_POST['pharmSal'];
	
	$sql = "select * from pharmacist where phid = '$id' or salary = '$sal' or name like '%$name%'";
	$result = mysqli_query($conn,$sql);

	echo "<body bgcolor='green'>";
	echo "<h1>Pharmacist Information</h1>";
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
			echo "<td>" .$row["phid"]. "</td>";
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