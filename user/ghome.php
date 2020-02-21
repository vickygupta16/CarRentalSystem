<html>
<head>
<title>User Home</title>
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
<div style="margin-top:30px" align="center">
	<?php
		$fn=$_POST['fname'];
        $ln=$_POST['lname'];
        $email=$_POST['email'];
        $pw=$_POST['pw'];
        $contact=$_POST['contact'];
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
            $sql="insert into userprofile(fname,lname,email,password,contact) 
            values('$fn','$ln','$email','$pw','$contact')";
            if(mysqli_query($conn,$sql))
            {
                echo "<h3 align='center'>Welcome $fn $ln</h3>";
                echo "<h4 align='center'>Login later to know your User ID</h4>";
                echo "<h5 align='center'>Thank You</h3>";
            }
            else 
            {
                echo "<h3 align='center'>Could not Register".$mysqli_error($conn)."</p>";
            }
        }
        mysqli_close($conn);
	?>
</div>
</body>
</html>