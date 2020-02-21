<html>
<head>
<title>Query Admin</title>
<link rel="icon" type="image/icon" href="logo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .ac {   text-align:center;  }
</style>
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
<div class="row" style="width:500px;margin:auto">
    <div class="col-md-12">
        <div class="card" style="padding:30px;background-color:yellow">
            <h3 align="center">Contact With Admin</h3>
            <h5 align="center">Submit your query in below form</h5>
            <form method="post" action="contacts.php">
                <table align="center" cellpadding="20px" style="background-color:whitesmoke">
                    <tr align="center">
                        <td><label for="gid"><b>Guest ID</b></label></td>
                        <td><input type="number" name="gid" id="gid" required autofocus class="ac"></td>
                    </tr>
                    <tr align="center">
                        <td><label for="query">Query</label></td>
                        <td><textarea name="query" id="query" required class="ac" rows="4" cols="25"></textarea></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input type="submit" value="Query Now" class="btn btn-outline-danger"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>