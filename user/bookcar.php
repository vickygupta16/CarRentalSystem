<html>
<head>
<title>Book A Car</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .ac {   text-align:center;  }
</style>
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
	    echo '<h2 align=center>Vehicle List</h2><br>';
    }
    $sql='SELECT v1.vbrid,v1.name,v1.details,v2.vid,v2.price FROM vehiclebrand v1 join vehicle v2
    on v1.vbrid=v2.vbrid';
	$retval=mysqli_query($conn,$sql);

	if(mysqli_num_rows($retval)>0)
	{
        echo "<div style='overflow:scroll;height:250px;width:700px;margin:auto'>";
			echo "<table style='text-align:center;border:2px solid black;' 
	align='center' rules='rows' cellpadding='10px'>
    <tr>
    <th>Vehicle Brand ID</th>
    <th style='background-color:red;border-radius:20px'>Vehicle ID</th>
    <th>Name</th>
    <th>Details</th>
    <th>Price</th></tr>";
		while($row=mysqli_fetch_assoc($retval))
		{
			echo "<tr><td>{$row['vbrid']}</td>".
                "<td style='background-color:tomato;border-radius:20px'>{$row['vid']}</td>".
                "<td>{$row['name']}</td>".
                "<td>{$row['details']}</td>".
				"<td>{$row['price']}</td></tr>";
		}echo "</table></div>";
	}
	else
	{
		echo "<h1 align='center'>0 Records</h1>";
	}
		mysqli_close($conn);
?>
<div class="row" style="margin-top:30px" align="center">
    <div class="col-md-12">
        <h5 align="center">Book Your Needed Vehicle by Entering Vehicle ID and your User ID</h5>
        <form method="post" action="carbooked.php">
            <table cellpadding="10px">
                <tr>
                    <td><label for="vid">Vehicle ID</td>
                    <td><input type="number" required autofocus name="vid" id="vid" class="ac"></td>
                </tr>
                <tr>
                    <td><label for="uid">User ID</td>
                    <td><input type="number" required autofocus name="uid" id="uid" class="ac"></td>
                </tr>
                <tr>
                    <td><label for="booking">Confirmation</td>
                    <td>
                        <select required name="booking" id="booking">
                            <option value="Requested">Book Now</option>
                        </select>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="Book" class="btn btn-danger"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>