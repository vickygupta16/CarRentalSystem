<html>
<head>
<title>Update My Profile</title>
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
    $pass='';
    $dbname='crs1';
    $user='root';
    $conn=mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        die('Could not connect : '.mysqli_error());
    }
    else
    {
        $uid=$_POST['uid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $temp="select uid from userprofile where uid='$uid'";
        $t=mysqli_query($conn,$temp);
        if(mysqli_num_rows($t)>0)
        {
            $sql="update userprofile set fname='$fname',lname='$lname',email='$email',contact='$contact'
            where uid='$uid'";
            if(mysqli_query($conn,$sql))
            {
                echo "<h3 align='center'>Profile Updated Successfully</h3>";
            }
            else
            {
                echo "<h3 align='center'>Error in updating profile ".mysqli_error($conn)."</h3>";
            }
        }
        else
        {
            echo "<h3 align='center'>User ID '$uid' does not exist</h3>";
        }
    }
    mysqli_close($conn);
?>
</body>
</html>