<?php
include('config.php');
	header("refresh:10; url = index.html");
	$name = $_POST['patName'];
	$id = $_POST['patId'];
	$sal = $_POST['disease'];
	
	$sql = "select * from patient where pid = '$id' or disease like '%$sal%' or  name like '%$name%'";
	$result = mysqli_query($conn,$sql);

	echo "<body bgcolor='green'>";
	echo "<h1>Patient Information</h1>";
	echo "<p>";
	echo "<b>Your search result is:</b>";
	echo "<br>";
	echo "<br>";
	echo "<table border = 1 bgcolor = 'white'>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Disease</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>" .$row["pid"]. "</td>";
			echo "<td>" .$row["name"]. "</td>";
			echo "<td>" .$row["disease"]. "</td>";
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