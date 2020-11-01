<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <title>Electricity Bill Calculator</title>
</head>
<body>
<h1 class="text">Electricity Bill Calculator</h1>
<form class="fullPage text center" method="post">
    <br><br><br>
    <label>Total units: <?php require_once 'calculator.php';
        echo $_POST["units"] ?></label><br><br>

    <label>Total amount to be paid: <?php
        $units = $_POST["units"];
        $bill = new Bill($units);
        echo $bill->generate_bill(); ?></label><br><br>

    <label>Summary of your bill: <?php
        echo $bill->generate_summary(); ?></label>
</form>
</body>
</html>