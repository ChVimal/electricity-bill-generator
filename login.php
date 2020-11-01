<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <title>Electricity Bill Calculator</title>
</head>
<body>
<h1 class="text">Electricity Bill Calculator</h1>
<h4 class="text">Login</h4>
<form action="db_query.php" class="fullPage text center" method="post">
    <label for="number">Enter your mobile number:</label>
    <input id="number" name="number" placeholder="Mobile Number" type="tel"><br>
    <label for="password">Enter your password:</label>
    <input id="password" name="password" placeholder="Password" type="password"><br>
    <input name="submit" style="margin: 0" type="submit" value="SUBMIT"><br><br>
    <h3>Not a user?<a href="signup.php">Click here</a> to sign up.</h3>
</form>
</body>
</html>