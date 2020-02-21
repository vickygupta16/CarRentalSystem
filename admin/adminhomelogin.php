<html>
<head>
<title>Admin</title>
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
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    $sql='SELECT * FROM admin';
    $retval=mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0)
    {
      while($row=mysqli_fetch_assoc($retval))
      {
        if(($email==$row['email'])&($pw==$row['password']))
        {
          $aid=$row['aid'];
          echo "<h4 align='center'>Welcome Admin</h4>";
          echo "<h5 align='center'>Admin ID : $aid</h5>";
        }
        else
        {
          header("Location: ../adminlogin.php");
          //echo "<br><br><h5 align='center'>Email or Password Incorrect</p>";
        }
      }
    }
    mysqli_close($conn);
	?>
</body>
</html>