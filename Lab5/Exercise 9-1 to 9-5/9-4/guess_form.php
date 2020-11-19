<?php
// Start the session
session_start();
if ( !isset( $_SESSION['count'] ) )
$_SESSION['count'] = 1; else $_SESSION['count']++;

print "<form action=guess.php method=post>";
print "<b>Guess the number from 0 to 100</b>: <input type=text name=t1>";
print "<input type=submit value=guess>";
print "</form>";
print "</body>";
print "</html>";

?>