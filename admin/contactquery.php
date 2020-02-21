<html>
<head>
<title>Query Contacts</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .ac 
    {   text-align:center;  }
</style>
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
	$sql='SELECT * FROM guest';
	$retval=mysqli_query($conn,$sql);
	if(mysqli_num_rows($retval)>0)
	{
			echo "<table style='text-align:center;border:2px solid black' 
	align='center' rules='rows' cellpadding='10px'>
    <tr>
    <th>Guest ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    </tr>";
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td>{$row['gid']}</td>".
                "<td>{$row['fname']} {$row['lname']}</td>".
                "<td>{$row['email']}</td>".
				"<td>{$row['contact']}</td></tr>";
		}echo "</table>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
    }
    echo "<br>";
    $mysql="select * from contact";
    $ret=mysqli_query($conn,$mysql);
    if(mysqli_num_rows($ret)>0)
    {
        echo "<table style='text-align:center;border:2px solid black' align='center' 
        rules='rows' cellpadding='10px'>
        <tr><th>Contact ID</th><th>Guest ID</th><th>Query</th><th>Reply</th></tr>";
        while($r=mysqli_fetch_assoc($ret))
        {
            echo "<tr><td>{$r['cid']}</td>".
                    "<td>{$r['gid']}</td>".
                    "<td>{$r['query']}</td>". 
                    "<td>{$r['reply']}</td></tr>";
        }
    }
    else
    {
        echo "<h1 align='center'>0 Records</h1>";
    }
    echo "</table>";
	mysqli_close($conn);
?>
<br><br><br>
<div class="row">
    <div class="col-md-12">
        <div class="card" style="margin:auto;width:500px;padding:30px;background-color:yellow">
        <form method="post" action="cqs.php">
            <table align="center" cellpadding="20px">
                <tr>
                    <td><label for="cid">Contact ID</label></td>
                    <td><input type="number" id="cid" name="cid" required autofocus class="ac"></td>
                </tr>
                <tr>
                    <td><label for="reply">Reply</label></td>
                    <td><textarea id="reply" name="reply" required class="ac" rows="4" cols="25"></textarea></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="Reply" class="btn btn-dark"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</div>
<br><br>
</body>
</html>