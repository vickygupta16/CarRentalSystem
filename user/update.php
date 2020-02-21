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
<div align="center" class="container">
    <div class="card" style="width:500px;padding:30px;background-color:burlywood;border-radius:50px">
        <form method="post" action="updatep.php">
            <table cellpadding="10px" style="box-shadow:10px 10px 20px black;background-color:cyan;border:2px solid black">
                <tr>
                    <td><label for="uid">User ID</label></td>
                    <td><input type="number" name="uid" id="uid" required class="ac" autofocus></td>
                </tr>
                <tr>
                    <td><label for="fname">First Name</label></td>
                    <td><input type="text" name="fname" id="fname" required class="ac"></td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name</label></td>
                    <td><input type="text" name="lname" id="lname" required class="ac"></td>
                </tr>
                <tr>
                    <td><label for="email">Email ID</label></td>
                    <td><input type="email" name="email" id="email" required class="ac"></td>
                </tr>
                <tr>
                    <td><label for="contact">Contact</label></td>
                    <td><input type="text" name="contact" id="contact" required class="ac"> </td>
                </tr>
                <tr align="center">
                    <td colspan=2><input type="submit" value="Update" class="btn btn-warning"/>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>