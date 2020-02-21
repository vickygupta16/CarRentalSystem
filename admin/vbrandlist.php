<html>
<head>
<title>Vehicle Brand List</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<ul class="nav justify-content-center" style="background-color:black;padding:10px;position:fixed;width:100%;z-index:1">
    <li class="nav-item">
    <a class="nav-link active" href="ahome.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="acontact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vbrandlist.php">Vehicle Brand List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vlist.php">Vehicle List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="reguser.php">Registered Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contactquery.php">Query Contacts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="managebooking.php">Manage Car Booking</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vehicletestimonial.php">Testimonial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../adminlogin.php">Log Out</a>
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
    echo "<div class='col-md-12' align='center'>
    <button class='btn btn-danger'><a style='text-decoration:none;color:yellow;'
	 href='addvbr.php'>Add Vehicle Brand</a></button>
	 <button class='btn btn-info'><a style='text-decoration:none;color:yellow;'
	 href='editvbr.php'>Edit Vehicle Brand</a></button>
	 <button class='btn btn-primary'><a style='text-decoration:none;color:yellow;'
     href='delvbr.php'>Delete Vehicle Brand</a></button>
     </div><br>";
	$sql='SELECT * FROM vehiclebrand';
	$retval=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($retval)>0)
	{
        echo "<table style='text-align:center;border:2px solid black;box-shadow:10px 10px 5px grey' 
	align='center' rules='rows' cellpadding='10px'>
	<tr><th>Vehicle Brand ID</th><th>Name</th><th>Details</th></tr>";
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td>{$row['vbrid']}</td>".
				"<td>{$row['name']}</td>".
				"<td>{$row['details']}</td></tr>";
		}echo "</table>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
	}
	mysqli_close($conn);
?>
</body>
</html>