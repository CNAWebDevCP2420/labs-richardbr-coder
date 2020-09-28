<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$Days = ["Sunday","Monday","Tuesday", "Wednesday", "Thursday",
     "Friday", "Saturday"];

echo "The days of the week in English are: <br>";
foreach($Days as $day){
    echo $day . "<br>";
}

$Days = ["Dimmanche","Lundi","Mardi", "Mercredi", "Jeudi",
     "Vendredi", "Samedi"];

echo "<br>The days of the week in French are: <br>";
foreach($Days as $day){
    echo $day . "<br>";
}

?>

</body>
</html>