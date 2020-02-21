<html>
<head>
<title>User Home Login</title>
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
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    $sql="SELECT * FROM userprofile where email='$email' and password='$pw'";
    $retval=mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0)
    {
      while($row=mysqli_fetch_assoc($retval))
      {
        if(($email==$row['email'])&($pw==$row['password']))
        {
          $fname=$row['fname'];
          $lname=$row['lname'];
          $uid=$row['uid'];
          echo "<h4 align='center'>Welcome $fname $lname</h4>";
          echo "<h5 align='center'>Your User ID is $uid";
        }
        
      }
    }
    else
        {
          header("Location: ../userlogin.php");
          //echo "<br><br><h5 align='center'>Email or Password Incorrect</p>";
        }
    mysqli_close($conn);
    ?>
</body>
</html>