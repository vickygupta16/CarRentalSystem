<html>
<head>
<title>Guest Login Home</title>
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
    $gid=$_POST['gid'];
    $query=$_POST['query'];
	$sql="insert into contact(gid,query) values('$gid','$query')";
    if(mysqli_query($conn,$sql))
    {
        echo "<h3 align='center'>Query Sent to Admin!.</h3>";
    }
    else 
    {
        echo "<h3 align='center'>Could not Send Query $mysqli_error($conn)</p>";
    }
        mysqli_close($conn);
?>
</body>
</html>