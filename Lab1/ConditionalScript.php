<!DOCTYPE html>

<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Conditional Script</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $IntVariable = 75; 
            if($IntVariable > 100){
                $Result = "$IntVariable is greater than 100";
            }
            else{
                $Result = '$IntVariable is less than or equal to 100';
            } 
            echo "<p>$Result</p>";
        ?>
        
    </body>
</html>

