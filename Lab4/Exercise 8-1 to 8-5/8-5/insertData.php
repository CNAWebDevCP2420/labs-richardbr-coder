<?php

//connect with the database using db.php
require('db.php');

//Get the value from survey.php
$fname=$_POST['name'];
$fage=$_POST['age'];
$fno=$_POST['no'];
$fdate=$_POST['date'];
$ftime=$_POST['time'];
$fstaff=$_POST['staff'];
$fstorage=$_POST['storage'];
$fcomfort=$_POST['comfort'];
$fclean=$_POST['cleanliness'];
$fnoise=$_POST['noise'];

//Use the insert query to add the record in database.
$query = "INSERT INTO surveyDB VALUES('$fname', '$fage', '$fno', '$fdate',
'$ftime', '$fstaff', '$fstorage', '$fcomfort', '$fclean', '$fnoise')";

//Check if the records are added successfully.
if (mysqli_query($connection, $query)){

//Display the message.
echo "<script type='text/javascript'>alert('Record added!')</script>";

//Navigate to survey.php
header("Location: survey.php");
}

//Otherwise display the message.
else{

echo "<script type='text/javascript'> alert('No Record added!')</script>";

exit;
}

?>