<html>
<head>
<title>Delete Vehicle Brand</title>
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
<div class="col-md-12" align="center">
<div class="card" style="width:500px;padding:40px;background-color:yellow;border-radius:30px 80px">
    <h3>Delete Vehicle Brand Details</h3>
    <form method="post" action="delvbrs.php">
        <table cellpadding="20px" style="text-align:center;box-shadow:10px 10px 5px white;background-color:lightblue">
            <tr>
                <td><label for="vbrid">Vehicle Brand ID</td>
                <td><input type="number" name="vbrid" id="vbrid" required style="text-align:center"/>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Delete" class="btn btn-outline-danger"></td>
            </tr>
        </table>
    </form>
</div>
</div>
</body>
</html>