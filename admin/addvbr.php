<html>
<head>
<title>Add Vehicle Brand</title>
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
	else 
	{
	    echo '<h2 align=center>Add Vehicle Brand</h2><br>';
    }
	$sql='SELECT * FROM vehicle';
	$retval=mysqli_query($conn,$sql);
		mysqli_close($conn);
?>
<div class="container" align="center" style="box-shadow:10px 10px 5px gray;width:400px">
    <form action="vbadds.php" method="post">
        <table cellpadding="20px">
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" required style="text-align:center" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="details">Details</label></td>
                <td><textarea id="details" name="details" required rows="4" cols="25"></textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Add" class="btn btn-outline-success"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>