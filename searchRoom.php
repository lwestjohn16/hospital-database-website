<?php
include('config.php');
	header("refresh:10; url = index.html");
	$name = $_POST['roomNum'];
	$id = $_POST['ward'];
	$sal = $_POST['floor'];
	
	$sql = "select * from room where number = '$name' or floor = '$sal' or ward like '%$id%'";
	$result = mysqli_query($conn,$sql);

	echo "<body bgcolor='green'>";
	echo "<h1>Room Information</h1>";
	echo "<p>";
	echo "<b>Your search result is:</b>";
	echo "<br>";
	echo "<br>";
	echo "<table border = 1 bgcolor = 'white'>
	<tr>
	<th>Room Number</th>
	<th>Ward</th>
	<th>Floor Number</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>" .$row["number"]. "</td>";
			echo "<td>" .$row["ward"]. "</td>";
			echo "<td>" .$row["floor"]. "</td>";
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