<?php
	$host='localhost';
	$user='root';
	$pass='';
	$conn=mysqli_connect($host,$user,$pass);
	if(!$conn)
	{
		die('Could not connect : '.mysqli_error());
	}
	echo '<h2>Connected Successfully</h2>';
	$sql='CREATE Database crs1';
	if(mysqli_query($conn,$sql))
	{
		echo "<h3>Database crs1 created successfully</h3>";
	}
	else
	{
		echo "Database creation failed ".mysqli_error($conn);
	}
	mysqli_close($conn);
?>