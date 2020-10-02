<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Trains</title>
</head>
<body>
<h1 style= "text-align:centre"><b><font color= 'darkorange'>Two Trains</font></b></h1>
<?php

error_reporting(E_ALL);
$DispForm = true;
$SpeedA = "";
$SpeedB = "";
$Dist = "";

$errorCount = 0;

    if(isset($_POST["Submit"]))
    {
        $SpeedA = $_POST["trainA"];
        $SpeedB = $_POST["trainB"];
        $Dist = $_POST["distance"];
        
        if($SpeedA <= 0)
        {
            echo "The train A's speed should be greater than 0<br />";
            $errorCount++;
        }
        if($SpeedB <= 0)
        {
            echo "The train B's speed should be greater than 0<br />";
            $errorCount++;
        }
        if($Dist <= 0)
        {
            echo "Distance between the trains should be greater than 0<br />";
            $errorCount++;
        }
        
        if($errorCount > 0)
        {
            $DispForm = true;
        }
        else
        {
            $DispForm = false;
        }
    
    }

    if ($DispForm == true)
    {

    ?>
        <form name="twoTrains" action="TwoTrains.php" method="post">
        <p><i><b>Speed of Train A: <input type="text" name="trainA" value="<?php echo $SpeedA; ?>" /></b></i></p>
        <p><i><b>Speed of Train B: <input type="text" name="trainB" value="<?php echo $SpeedB; ?>" /></b></i></p>
        <p><i><b>Distance between the trains: <input type="text" name="distance" value="<?php echo $Dist; ?>" /></b></i></p>
        <p><input type="submit" name="Submit" value="Submit" /></p>
        
        </form>
    <?php
        

    }
    else
    {
        $DistA = (($SpeedA / $SpeedB) * $Dist) / (1 + ($SpeedA / $SpeedB));
        $DistB = $Dist - $DistA;
        $TimeA = $DistA / $SpeedA;
        $TimeB = $DistB / $SpeedB;
        
        
        echo "<i>Train A travelled " . $DistA . " for a total time of " . $TimeA . ".</i><br />";
        echo "<i>Train B travelled " . $DistB . " for a total time of " . $TimeB . ".</i><br />";
        echo "<i>The sum of the two distances is ".($DistA+$DistB)."miles </i><br />";
        
        

    }

?>
</body>
</html>