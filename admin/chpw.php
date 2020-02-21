<html>
<head>
<title>Admin Password Change Status</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<ul class="nav justify-content-center" style="background-color:black;padding:10px;position:fixed;width:100%;z-index:1">
    <li class="nav-item">
    <a class="nav-link active" href="../home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../adminlogin.php">Admin Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../userlogin.php">User Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="userreg.php">User Registration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../guestlogin.php">Guest Login</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="guestreg.php">Guest Registration</a>
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
    $aid=$_POST['aid'];
    $pw=$_POST['pw'];
    $temp="select * from admin where aid='$aid'";
    $retval=mysqli_query($conn,$temp);
    if(mysqli_num_rows($retval)>0)
    {
        while($row=mysqli_fetch_assoc($retval)>0)
        {
            if($aid!=$row['aid'])
            {
                $sql="update admin set password='$pw' where aid='$aid'";
                if(mysqli_query($conn,$sql))
                {
                    echo "<p align=center>Password Changed Successfully.</p>";
                }
                else
                {
                    echo "<p>Could not change the password! Sorry.".mysqli_error($conn)."</p>";
                }
            }
        }
    }
    else
    {
        echo "<h4 align=center>Admin ID $aid does not exist.</h4>";
    }
    mysqli_close($conn);
	?>
</body>
</html>