<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $numb0 = 3.6;

        if(is_numeric($numb0) || round($numb0) == ($numb0 % 2)){
            echo "The number is even!";
        }
        

    ?>
</body>
</html>