<html>
<head>
<title>Edit Vehicle Brand</title>
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
<div class="container" align="center">
    <h3>Update/Edit Vehicle Brand Details</h3>
    <form method="post" action="editvbrs.php">
        <table cellpadding="20px" style="text-align:center;box-shadow:10px 10px 5px grey;">
            <tr>
                <td><label for="vbrid">Vehicle Brand ID</td>
                <td><input type="number" name="vbrid" id="vbrid" required style="text-align:center"/>
            </tr>
            <tr>
                <td><label for="name">Name</td>
                <td><input type="text" name="name" id="name" required style="text-align:center"/>
            </tr>
            <tr>
                <td><label for="details">Details</td>
                <td><input type="text" name="details" id="details" required style="text-align:center"/>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Update" class="btn btn-warning"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>