<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numb1 = 2.5;
    $numb2 = 3.2;

        echo "Example using the 'round()' function: ";
        echo "<br>The addition of 2.5 & 3.2 = " . round($numb1 + $numb2) . "<br>";

        echo "<br>Example using the 'ceil()' function: ";
        echo "<br>Rounding 3.2 up to a whole number = " . ceil($numb2) . "<br>";

        echo "<br>Example using the 'floor()' function: ";
        echo "<br>Rounding 2.5 down to a whole number = " . floor($numb1) . "<br>";

    ?>
</body>
</html>