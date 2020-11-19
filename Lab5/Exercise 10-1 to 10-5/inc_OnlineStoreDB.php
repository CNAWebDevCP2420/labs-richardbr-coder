<?php
$ErrorMsgs = array();
$DBConnect = new mysqli("localhost", "root", "root","online_stores");
//echo "Database Connected";
if ($DBConnect->connect_error)
   $ErrorMsgs[] = "The database server is not available. " .
               "Connect Error is " . $mysqli->connect_errno . 
               " " . $mysqli->connect_error . ".";
?>