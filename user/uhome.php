<html>
<head>
<title>User Home</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    body {margin:0;}
    div#slider {overflow:hidden}
    div#slider figure img {height:100%;width:20%;float:left;}
    div#slider figure
    {
    position:relative;
    width:500%;
    margin:0;
    left:0;
    height:500px;
    animation: 15s slider infinite;
    }
    @keyframes slider
    {
    0%{left:0%;}
    20%{left:0%;}
    25%{left:-100%;}
    45%{left:-100%;}
    50%{left:-200%;}
    70%{left:-200%;}
    75%{left:-300%;}
    90%{left:-300%;}
    95%{left:-400%;}
    100%{}
    }
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
<div align="center">
<h1 style="font-size:100px">Car Rental System</h1>
</div>
<div id="slider">
<figure>
<img src="car1.jpg">
<img src="car2.jpg">
<img src="car3.jpg">
<img src="car4.jpg">
</figure>
</div>
</body>
</html>