<?php  
require('db_connect.php');

$interviewer_name=$_POST['iname'];

$position=$_POST['pos'];

$date_of_interview=$_POST['dofin'];

$candidates_name=$_POST['cdname'];

$communicationab=$_POST['cabilities'];

$professionalap=$_POST['papp'];

$Compskills=$_POST['Compskill'];

$businessknd=$_POST['bkno'];

$inter_comment=$_POST['icomm'];

$query = "INSERT INTO candidate VALUES('$interviewer_name', '$position', '$date_of_interview', '$candidates_name',

'$communicationab', '$professionalap', '$Compskills', '$businessknd', '$inter_comment')";

if (mysqli_query($connection, $query)){

echo "<script type='text/javascript'>alert('Record added!')</script>";

header("Location: interview.php");

}

else{

echo "<script type='text/javascript'> alert('No Record added!')</script>";

exit;

}

?>