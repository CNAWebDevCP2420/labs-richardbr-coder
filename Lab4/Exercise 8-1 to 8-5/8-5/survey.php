<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Give the title-->
<title>Airline Survey</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<body>

<!-- Prompt the user to enter the records.-->
<h2>Please enter the following details</h2>

<!-- on submit click navigate to insert.php-->
<form method="POST" action="insertData.php">

<!-- Display the form content-->
<p>Name <input type="text" name="name" /></p>
<p>Age <input type="text" name="age" /></p>
<p>Flight Number <input type="text" name="no" /></p>
<p>Flight Date <input type="text" name="date" /></p>
<p>Flight Time <input type="text" name="time" /></p><br /><br />
<p>Friendliness of customer staff</p><br />
<input type="radio" name="staff" value="No Opinion" />No Opinion<br />
<input type="radio" name="staff" value="Poor" />Poor<br />
<input type="radio" name="staff" value="Fair" />Fair<br />
<input type="radio" name="staff" value="Good" />Good<br />
<input type="radio" name="staff" value="Excellent" />Excellent<br /><br />
<p>Space for luggage storage</p><br />
<input type="radio" name="storage" value="No Opinion" />No Opinion<br />
<input type="radio" name="storage" value="Poor" />Poor<br />
<input type="radio" name="storage" value="Fair" />Fair<br />
<input type="radio" name="storage" value="Good" />Good<br />
<input type="radio" name="storage" value="Excellent" />Excellent<br /><br />
<p>Comfort of seating</p><br />
<input type="radio" name="comfort" value="No Opinion" />No Opinion<br />
<input type="radio" name="comfort" value="Poor" />Poor<br />
<input type="radio" name="comfort" value="Fair" />Fair<br />
<input type="radio" name="comfort" value="Good" />Good<br />
<input type="radio" name="comfort" value="Excellent" />Excellent<br /><br />
<p>Cleanliness of aircraft</p><br />
<input type="radio" name="cleanliness" value="No Opinion" />No Opinion<br />
<input type="radio" name="cleanliness" value="Poor" />Poor<br />
<input type="radio" name="cleanliness" value="Fair" />Fair<br />
<input type="radio" name="cleanliness" value="Good" />Good<br />
<input type="radio" name="cleanliness" value="Excellent" />Excellent<br /><br />
<p>Noise level of aircraft</p><br />
<input type="radio" name="noise" value="No Opinion" />No Opinion<br />
<input type="radio" name="noise" value="Poor" />Poor<br />
<input type="radio" name="noise" value="Fair" />Fair<br />
<input type="radio" name="noise" value="Good" />Good<br />
<input type="radio" name="noise" value="Excellent" />Excellent<br /><br />
<p><input type="submit" value="Submit" />
<input type="reset" value="Reset" /></p>
</form>

<!-- On View all Reviews click navigate to display data.-->
<p><a href="displayData.php">View all Reviews</a></p>
</body>
</html>