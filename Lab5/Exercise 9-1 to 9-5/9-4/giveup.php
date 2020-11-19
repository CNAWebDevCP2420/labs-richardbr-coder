<?php
session_start();
foreach ($_SESSION['gen1'] as $value => $n1 ) {
echo "Correct number is $n1";
echo "<br>";
}
?>