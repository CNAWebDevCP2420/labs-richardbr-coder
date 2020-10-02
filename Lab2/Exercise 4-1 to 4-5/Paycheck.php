<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type"
	    content="text/html; charset=iso-8859-1" />
    <title>Paycheck</title>
</head>
<body>
<h1>Paycheck Calculations</h1>
<?php

$hoursWorked = $_GET["hours"];
$wages = $_GET["wage"];


echo "You entered that you worked: $hoursWorked hours.<br>";
echo "You entered that your hourly wage is: $wages per hour.<br>";

if ($hoursWorked <= 40)
{
	$payCheck = ($hoursWorked * $wages);
		echo "Your Paycheck is: $payCheck";
}

if ($hoursWorked > 40) 
{
	$payCheck = ($hoursWorked * $wages) + (($hoursWorked - 40) * $wages * 1.5);
	   echo "Your Paycheck is: $payCheck";
}


?>
<form method="get" action="Paycheck.html"></br>
<input type="submit"  value="Return"/>
</body>
</html>