<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies class tester</title>
</head>
<body>
<h1>Movies</h1>

<?php
echo "<h3>Minimum age Limit=1 & Maximum age Limit=80</h3>";
echo "</br>";

if(isset($_POST['submit']))
{
$age=$_POST['owed'];
require_once("class_Movies3.php");
$a=new Movies;	
$a->SetAge($age);
$a->error($age);
echo "</br>";
echo "Price:".$a->GetPrice()."</b>";

}

echo "<p>\n";


?>
<a href="Movies.html">return to homepage</a>
</body>
</html>