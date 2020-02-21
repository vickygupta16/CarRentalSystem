<html>
<head>
<title>Registered Users List</title>
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
<h3 align="center">Registered User List</h3>
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
	$sql='SELECT * FROM userprofile';
	$retval=mysqli_query($conn,$sql);
	if(mysqli_num_rows($retval)>0)
	{
        echo "<table style='text-align:center;border:2px solid black;box-shadow:10px 10px 5px grey' 
	align='center' rules='rows' cellpadding='10px'>
    <tr>
    <th>Registered User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Contact</th>
    </tr>";
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td>{$row['uid']}</td>".
                "<td>{$row['fname']}</td>".
                "<td>{$row['lname']}</td>".
                "<td>{$row['email']}</td>".
				"<td>{$row['contact']}</td></tr>";
		}echo "</table>";
	}
	else
	{
		echo "<h1 align='center'>0 Registered Users</h1>";
	}
	mysqli_close($conn);
?>
</body>
</html>