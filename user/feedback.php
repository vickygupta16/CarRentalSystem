<html>
<head>
<title>User Testimonial</title>
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
<div class="row" style="margin-top:30px" align="center">
    <div class="col-md-12">
        <h5 align="center">Testimonial / Give us a feedback!</h5>
        <form method="post" action="feedbacks.php">
            <table cellpadding="20px" style="box-shadow:10px 10px 20px black;border-radius:20px 20px">
                <tr>
                    <td><label for="uid">User ID</td>
                    <td><input type="number" required name="uid" id="uid" class="ac"></td>
                </tr>
                <tr>
                    <td><label for="fb">Feedback</td>
                    <td>
                        <textarea rows="4" cols="23" id="fb" name="fb" class="ac"></textarea>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="Submit" class="btn btn-danger"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>