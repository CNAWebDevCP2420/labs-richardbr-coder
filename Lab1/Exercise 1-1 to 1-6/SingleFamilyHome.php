<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Family Home</title>
</head>
<body>

<?php

$SingleFamilyHome = 399500;
$SingleFamilyHome_Display = 
    number_format($SingleFamilyHome, 2);
echo "<p>The current median price of a single fammily 
    home in Pleasanton, CA is $$SingleFamilyHome_Display.</p>";


?>
    
</body>
</html>

