<html>
<head>
<title>Vehicle Brand List</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<ul class="nav justify-content-center" style="background-color:black;padding:10px;position:fixed;width:100%;z-index:1">
    <li class="nav-item">
    <a class="nav-link active" href="ghome.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vehiclebrandlist.php">Vehicle Brand List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vehiclelist.php">Vehicle List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gcontact.php">Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../guestlogin.php">Log Out</a>
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
	echo '<h2 align=center>Vehicle Brand List</h2><br>';
	}
	$sql='SELECT * FROM vehiclebrand';
    $retval=mysqli_query($conn,$sql);
    echo "<div class='card' style='padding:40px;background-color:#FAAC58;width:600px;margin:auto;
    border-radius:80px 80px'>";
	echo "<table style='text-align:center;border:2px solid black;background-color:#81DAF5;box-shadow:10px 10px 5px black' 
	align='center' rules='rows' cellpadding='10px'>
	<tr><th>Vehicle Brand ID</th><th>Name</th><th>Details</th></tr>";
	if(mysqli_num_rows($retval)>0)
	{
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td>{$row['vbrid']}</td>".
				"<td>{$row['name']}</td>".
				"<td>{$row['details']}</td></tr>";
		}echo "</table>";
	}
	
	else
	{
		echo "0 Records";
    }
    echo "</div>";
		mysqli_close($conn);
?>
</body>
</html>