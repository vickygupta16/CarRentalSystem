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
<div style="margin-top:30px" align="center">
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
    $sql="SELECT fname,lname,gid,email,password FROM guest where email='$email' and password='$pw'";
    $retval=mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0)
    {
      while($row=mysqli_fetch_assoc($retval))
      {
        if(($email==$row['email'])&&($pw==$row['password']))
        {
          $fname=$row['fname'];
          $lname=$row['lname'];
          $gid=$row['gid'];
          echo "<h4 align='center'>Welcome $fname $lname</h4>";
          echo "<h5 align='center'>Your Guest ID is $gid";
        break;
        }
        else
        {
          header("Location: ../guestlogin.php");
        }
      }
    }
    else
        {
          header("Location: ../guestlogin.php");
        }
   
    
    mysqli_close($conn);
	?>
</div>
</body>
</html>