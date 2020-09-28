<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperture Conversion</title>

    <style>
    #left {
        float: left;
        width: 65%;
        overflow: hidden;
    }

    #right {
        overflow: hidden;
    }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="left">
        <?php

            echo "Conversion from Fahrenheit to Celsius: <br>";

            for($F=0;$F<100;$F++)
            {
                $C=(5/9) * ($F -32);
                echo round($C,1);
                echo "<br>";
            }

        

        ?>
    </div>

    <div id="right">
        <?php

            echo "Conversion from Celsius to Fahrenheit: <br>";

            for($C=0;$C<100;$C++)
            {
                $F=$C*(5/9) +32;
                echo round($F,1);
                echo "<br>";
            }

        ?>
    </div>
</div>
</body>
</html>