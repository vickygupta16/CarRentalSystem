<html>
<head>
<title>Guest Login</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .ac { text-align:center;  }
</style>
</head>
<body>
<ul class="nav justify-content-center" style="background-color:black;padding:10px;position:fixed;width:100%;z-index:1">
    <li class="nav-item">
    <a class="nav-link active" href="home.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminlogin.php">Admin Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="userlogin.php">User Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="userreg.php">User Registration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="guestlogin.php">Guest Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="guestreg.php">Guest Registration</a>
  </li>
</ul>
<br><br><br>
<div class="container" align="center" style="margin-top:30px;box-shadow:10px 10px 5px grey;width:400px">
	<h3>Guest Login</h3>
	<form method="post" action="guest/guesthomelogin.php">
	<table cellpadding="10px">
		<tr>
      <td><label for="email">Email ID</label></td>
      <td><input type="email" name="email" id="email" required autofocus class="ac"></td>
		</tr>
		<tr>
      <td><label for="pw">Password</label></td>
      <td><input type="password" name="pw" id="pw" required class="ac"></td>
		</tr>
		<tr align="center">
			<td colspan=2><input type="submit" value="Login" class="btn btn-outline-primary"/>
		</tr>
	</table>
	</form>
</div>
</body>
</html>