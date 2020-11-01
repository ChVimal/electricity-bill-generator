<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <title>Electricity Bill Calculator</title>
</head>
<body>
<h1 class="text">Electricity Bill Calculator</h1>
<h4 class="text">Sign UP</h4>
<h5 class="text">You need to sign up before you can use the service.</h5>
<form action="save_to_db.php" class="fullPage text center" method="post">
    <label for="name">Enter your name:</label>
    <input id="name" name="name" placeholder="Name" type="text"><br>
    <label for="number">Enter your mobile number:</label>
    <input id="number" name="number" placeholder="Mobile Number" type="tel"><br>
    <label for="password">Enter your password:</label>
    <input id="password" name="password" placeholder="Password" type="password"><br>
    <input name="submit" style="margin: 0" type="submit" value="SUBMIT"><br><br>
    <h3>Not a user?<a href="signup.php">Click here</a> to sign up.</h3>
</form>
</body>
</html>