<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Prices</title>
</head>
<body>
    <?php

        $GasPrice = 2.57;
        if($GasPrice >= 2 || $GasPrice <= 3) {
                echo "<p>Gas price are between
                            $2.00 and $3.00.<p>";
        }
        else { 
            echo "Gas prices are NOT between $2.00 and $3.00.";
        }

    ?>
</body>
</html>