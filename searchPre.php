<?php
include('config.php');
	header("refresh:10; url = index.html");
	$name = $_POST['ordNum'];
	$id = $_POST['ordCost'];
	$sal = $_POST['drug'];
	
	$sql = "select * from prescription where ordernum = '$name' or cost = '$id' or drug like '%$sal%'";
	$result = mysqli_query($conn,$sql);

	echo "<body bgcolor='green'>";
	echo "<h1>Prescription Information</h1>";
	echo "<p>";
	echo "<b>Your search result is:</b>";
	echo "<br>";
	echo "<br>";
	echo "<table border = 1 bgcolor = 'white'>
	<tr>
	<th>Order Number</th>
	<th>Cost</th>
	<th>Medicine</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>" .$row["ordernum"]. "</td>";
			echo "<td>" .$row["cost"]. "</td>";
			echo "<td>" .$row["drug"]. "</td>";
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