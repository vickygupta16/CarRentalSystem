<html>
<head>
<title>Manage Car Booking</title>
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
	    echo '<h2 align=center>Car Booking Request List</h2><br>';
    }
	$sql='SELECT * FROM vehiclebooking';
	$retval=mysqli_query($conn,$sql);
	if(mysqli_num_rows($retval)>0)
	{
        echo "<div style='overflow:scroll;height:250px;width:700px;margin:auto'>";
		echo "<table style='text-align:center;border:2px solid black' 
	    align='center' rules='rows' cellpadding='10px'>
        <tr>
        <th style='background-color:magenta;border-radius:30px'>Vehicle Booking ID</th>
        <th>Vehicle ID</th>
        <th>User ID</th>
        <th>Booking</th>
        <th>Status</th>
        </tr>";
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td style='background-color:pink;border-radius:70px'>{$row['vboid']}</td>".
                "<td>{$row['vid']}</td>".
                "<td>{$row['uid']}</td>".
                "<td>{$row['booking']}</td>".
				"<td>{$row['status']}</td></tr>";
        }
        echo "</table></div>";
    }
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
	}
	mysqli_close($conn);
?>
<div class="container" align="center" style="margin-top:40px;background-color:plum;width:500px;padding:20px;
    border-radius:80px;box-shadow:20px 20px 10px black">
    <div class="col-md-12">
        <form method="post" action="bc.php">
            <table cellpadding="10px">
                <tr>
                    <td><label for="vboid">Vehicle Booking ID</label></td>
                    <td><input type="number" required autofocus name="vboid" id="vboid" style="text-align:center"/></td>
                </tr>
                <tr>
                    <td><label for="c">Manage</label></td>
                    <td>
                        <select required id="c" name="c" >
                            <option disabled selected>Confirm / Cancel</option>
                            <option value="Confirm">Confirm</option>
                            <option value="Cancel">Cancel</option>
                        </select>  
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="Done" class="btn btn-secondary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>