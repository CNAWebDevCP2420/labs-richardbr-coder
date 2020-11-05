<?php

//Craete the connection object.
$connection = mysqli_connect('localhost', 'root', '');

//Check if the connection is established or not.
if (!$connection){
die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'survey');
if (!$select_db){
die("Database Selection Failed" . mysqli_error($connection));

}

?>