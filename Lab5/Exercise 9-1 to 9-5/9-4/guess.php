<?php
session_start();
$try=$_SESSION['count'];
$_SESSION['gen1']=array();
$num1=rand(0, 100);
array_push($_SESSION['gen1'], $num1);
$guess=$_POST["t1"];
if ($guess != $num1) {
    echo "Your guess is wrong for $try time";
} else {
    echo "Your guess is correct";
    echo('It takes $try time') ;
}
print "<br><a href=guess_form.php>GuessAgain</a><br>";
print "<br><a href=start.php>StartOver</a>";
print "<br><a href=giveup.php>Giveup</a>";
