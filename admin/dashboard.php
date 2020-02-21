<html>
<head>
<title>Dashboard</title>
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
<h4 align="center">My Dashboard</h4>
<br>
<div class="row">
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
	$sql1='SELECT * FROM vehicle';
    $retval1=mysqli_query($conn,$sql1);
    $sql1c="select count(*) as count from vehicle";
    $c1=mysqli_query($conn,$sql1c)->fetch_array();
	if(mysqli_num_rows($retval1)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;height:200px;
        box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Vehicle with ".$c1['count']." records</p>";
        echo "<table style='width:400px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Vehicle ID</th><th>Vehicle Brand ID</th><th>Price</th></tr>";
		while($row=mysqli_fetch_assoc($retval1))
		{
			echo "<tr><td>{$row['vid']}</td>".
				"<td>{$row['vbrid']}</td>".
				"<td>{$row['price']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }
    $sql2='SELECT * FROM vehiclebrand';
    $retval2=mysqli_query($conn,$sql2);
    $sql2c="select count(*) as count from vehiclebrand";
    $c2=mysqli_query($conn,$sql2c)->fetch_array();
	if(mysqli_num_rows($retval2)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;
        height:200px;box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Vehicle Brand with ".$c2['count']." records</p>";
        echo "<table style='width:500px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Vehicle Brand ID</th><th>Name</th><th>Details</th></tr>";
		while($row=mysqli_fetch_assoc($retval2))
		{
			echo "<tr><td>{$row['vbrid']}</td>".
				"<td>{$row['name']}</td>".
				"<td>{$row['details']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }    
	mysqli_close($conn);
?>
</div>
<br><br>
<div class="row">
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
	$sql3='SELECT * FROM vehiclebooking';
    $retval3=mysqli_query($conn,$sql3);
    $sql3c="select count(*) as count from vehiclebooking";
    $c3=mysqli_query($conn,$sql3c)->fetch_array();
	if(mysqli_num_rows($retval3)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;height:200px;
        box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Vehicle Booking Table with ".$c3['count']." records</p>";
        echo "<table style='width:500px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Vehicle Booking ID</th><th>Vehicle ID</th><th>User ID</th><th>Booking</th><th>Status</th></tr>";
		while($row=mysqli_fetch_assoc($retval3))
		{
			echo "<tr><td>{$row['vboid']}</td>".
                "<td>{$row['vid']}</td>".
                "<td>{$row['uid']}</td>".
                "<td>{$row['booking']}</td>".
				"<td>{$row['status']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }
    $sql4='SELECT * FROM vehicletestimonial';
    $retval4=mysqli_query($conn,$sql4);
    $sql4c="select count(*) as count from vehicletestimonial";
    $c4=mysqli_query($conn,$sql4c)->fetch_array();
	if(mysqli_num_rows($retval4)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;
        height:200px;box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Vehicle Testimonial with ".$c4['count']." records</p>";
        echo "<table style='width:400px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Vehicle Testimonial ID</th><th>Vehicle ID</th><th>Test Result</th></tr>";
		while($row=mysqli_fetch_assoc($retval4))
		{
			echo "<tr><td>{$row['vtid']}</td>".
				"<td>{$row['vid']}</td>".
				"<td>{$row['test']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }    
	mysqli_close($conn);
?>
</div>
<br><br>
<div class="row">
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
	$sql5='SELECT * FROM contact';
    $retval5=mysqli_query($conn,$sql5);
    $sql5c="select count(*) as count from contact";
    $c5=mysqli_query($conn,$sql5c)->fetch_array();
	if(mysqli_num_rows($retval5)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;height:200px;
        box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Contact with ".$c5['count']." records</p>";
        echo "<table style='width:600px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Contact ID</th><th>Guest ID</th><th>Query</th><th>Reply</th></tr>";
		while($row=mysqli_fetch_assoc($retval5))
		{
			echo "<tr><td>{$row['cid']}</td>".
                "<td>{$row['gid']}</td>".
                "<td>{$row['query']}</td>".
				"<td>{$row['reply']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }
    $sql6='SELECT * FROM guest';
    $retval6=mysqli_query($conn,$sql6);
    $sql6c="select count(*) as count from guest";
    $c6=mysqli_query($conn,$sql6c)->fetch_array();
	if(mysqli_num_rows($retval6)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;
        height:200px;box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Guest with ".$c6['count']." records</p>";
        echo "<table style='width:600px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Guest ID</th><th>FirstName</th><th>Last Name</th><th>Email</th><th>Contact</th></tr>";
		while($row=mysqli_fetch_assoc($retval6))
		{
			echo "<tr><td>{$row['gid']}</td>".
                "<td>{$row['fname']}</td>".
                "<td>{$row['lname']}</td>".
                "<td>{$row['email']}</td>".
				"<td>{$row['contact']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }    
	mysqli_close($conn);
?>
</div>
<br><br>
<div class="row">
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
	$sql7='SELECT * FROM userprofile';
    $retval7=mysqli_query($conn,$sql7);
    $sql7c="select count(*) as count from userprofile";
    $c7=mysqli_query($conn,$sql7c)->fetch_array();
	if(mysqli_num_rows($retval7)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;height:200px;
        box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Registered Users with ".$c7['count']." records</p>";
        echo "<table style='width:600px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Contact</th></tr>";
		while($row=mysqli_fetch_assoc($retval7))
		{
			echo "<tr><td>{$row['uid']}</td>".
                "<td>{$row['fname']}</td>".
                "<td>{$row['lname']}</td>".
                "<td>{$row['email']}</td>".
				"<td>{$row['contact']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }
    $sql8='SELECT * FROM usertestimonial';
    $retval8=mysqli_query($conn,$sql8);
    $sql8c="select count(*) as count from usertestimonial";
    $c8=mysqli_query($conn,$sql8c)->fetch_array();
	if(mysqli_num_rows($retval8)>0)
    {
        echo "<div class='col-md-6'><div class='col-md-12' style='border:2px solid black;overflow:scroll;
        height:200px;box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>User Testimonial with ".$c8['count']." records</p>";
        echo "<table style='width:400px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>User Testimonial ID</th><th>User ID</th><th>Feedback</th></tr>";
		while($row=mysqli_fetch_assoc($retval8))
		{
			echo "<tr><td>{$row['utid']}</td>".
                "<td>{$row['uid']}</td>".
				"<td>{$row['feedback']}</td></tr>";
		}
		echo "</table></div></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }    
	mysqli_close($conn);
?>
</div>
<br><br>
<div class="row">
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
	$sql9='SELECT * FROM admin';
    $retval9=mysqli_query($conn,$sql9);
    $sql9c="select count(*) as count from admin";
    $c9=mysqli_query($conn,$sql9c)->fetch_array();
	if(mysqli_num_rows($retval9)>0)
    {
        echo "<div class='col-md-12' style='border:2px solid black;overflow:scroll;height:200px;
        box-shadow:10px 10px 10px black;padding:20px'>";
        echo "<p align='center'>Registered Users with ".$c9['count']." records</p>";
        echo "<table style='width:400px;text-align:center;border:2px solid black;box-shadow:10px 10px 10px black'
        align='center' rules='rows' cellpadding='10px'>
        <tr><th>Admin ID</th><th>Email</th><th>Password</th></tr>";
		while($row=mysqli_fetch_assoc($retval9))
		{
			echo "<tr><td>{$row['aid']}</td>".
                "<td>{$row['email']}</td>".
				"<td>{$row['password']}</td></tr>";
		}
		echo "</table></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }
	mysqli_close($conn);
?>
</div>
<br><br>
</body>
</html>