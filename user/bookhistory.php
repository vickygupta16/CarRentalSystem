<html>
<head>
<title>Car Booking History</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<ul class="nav justify-content-center" style="background-color:black;padding:10px;position:fixed;width:100%;z-index:1">
    <li class="nav-item">
        <a class="nav-link active" href="uhome.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="bookcar.php">Book a Car</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="update.php">Update Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="bookhistory.php">Car Booking History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="feedback.php">Feedback</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="../userlogin.php">Log Out</a>
    </li>
</ul>
<br><br><br>
<?php
	$host='localhost';
	$user='root';
	$pass='';
	$dbname='crs1';
	$conn=mysqli_connect($host,$user,$pass,$dbname);
	if(!$conn)
	{
		die('Could not connect : '.mysqli_error());
	}
	else 
	{
	echo '<h2 align=center>Car Booking History</h2><br>';
	}
	$sql='SELECT * FROM vehiclebooking';
	$retval=mysqli_query($conn,$sql);
	if(mysqli_num_rows($retval)>0)
	{
		echo "<table style='text-align:center;border:2px solid black;box-shadow:10px 10px 20px black' 
        align='center' rules='rows' cellpadding='10px'>
        <tr>
        <th>Vehicle Booking ID</th>
        <th>Vehicle ID</th>
        <th>User ID</th>
        <th>Booking</th>
        <th>Status</th>
        </tr>";
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td>{$row['vboid']}</td>".
                "<td>{$row['vid']}</td>".
                "<td>{$row['uid']}</td>".
                "<td>{$row['booking']}</td>".
				"<td>{$row['status']}</td></tr>";
        }
        echo "</table>";
	}
	else
	{
		echo "0 Records";
	}
	mysqli_close($conn);
?>
</body>
</html>