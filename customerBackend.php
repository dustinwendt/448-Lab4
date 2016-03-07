<html>

<head>
<title>Receipt</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$gibsonAmount = $_POST['gibson'];
	$fenderAmount = $_POST['fender'];
	$epiphoneAmount = $_POST['epiphone'];

	$username = $_POST['username'];
	$password = $_POST['password'];

	$shippingName = array ("7-Day", "Overnight", "3-Day");
	$shippingCost = array (0,50,5);
	$shipping = $_POST['shipping'];

	$total = $gibsonAmount * 1299.00 + $fenderAmount * 1799.99 + $epiphoneAmount * 499.00 + $shippingCost[$shipping];

	echo "Username: " . $username . "<br>";
	echo "Password: " . $password . "<br>";

	echo "<table>";
	echo "<tr><td></td> <td>Quantity</td> <td>Cost per Item</td> <td>Subtotal</td> </tr>";
	echo "<tr> <td>Gibson</td><td>" . $gibsonAmount . "</td><td>$1,299.00</td> <td>$" . $gibsonAmount * 1299.00 . "</td> </tr>";
	echo "<tr> <td>Fender</td><td>" . $fenderAmount . "</td><td>$1,799.99</td> <td>$" . $fenderAmount * 1799.99 . "</td> </tr>";
	echo "<tr> <td>Epiphone</td><td>" . $epiphoneAmount . "</td><td>$499.00</td><td>$" . $epiphoneAmount * 499.00 . "</td></tr>";
	echo '<tr> <td>Shipping</td> <td colspan = "2">' . $shippingName[$shipping] . "</td><td>$" . $shippingCost[$shipping] .  "</td></tr>";
	echo '<tr><td colspan="3">Total Cost</td><td>$' . $total . "</td></tr>";

	echo "</table>";
	?>
</body>

</html>
