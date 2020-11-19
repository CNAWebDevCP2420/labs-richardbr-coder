<?php

session_start();

$fname="";
$lname="";
$address="";
$city="";
$state="";
$zip = "";
$phone="";
$email="";

if (isset($_SESSION["fname"])) {
    $fname = $_SESSION["fname"];
}
if (isset($_SESSION["lname"])) {
    $lname = $_SESSION["lname"];
}
if (isset($_SESSION["address"])) {
    $address = $_SESSION["address"] ;
}
if (isset($_SESSION["city"])) {
    $city = $_SESSION["city"];
}
if (isset($_SESSION["state"])) {
    $state = $_SESSION["state"] ;
}
if (isset($_SESSION["zip"])) {
    $zip = $_SESSION["zip"];
}
if (isset($_SESSION["phone"])) {
    $phone = $_SESSION["phone"] ;
}
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}
  

if (isset($_POST['btnNext'])) {
    $_SESSION["fname"] = $_POST['txtFirstName'];
    $_SESSION["lname"] = $_POST['txtLastName'];
    $_SESSION["address"] = $_POST['txtAddress'];
    $_SESSION["city"] = $_POST['txtCity'];
  
    $_SESSION["state"] = $_POST['txtState'];
    $_SESSION["zip"] = $_POST['txtZip'];
    $_SESSION["phone"] = $_POST['txtPhoneNo'];
    $_SESSION["email"] = $_POST['txtEmail'];
  
    header("location: companyinfo.php");
}

if (isset($_POST['btnStartOver'])) {
    session_destroy();
    $fname="";
    $lname="";
    $address="";
    $city="";
    $state="";
    $zip = "";
    $phone="";
    $email="";
}


?>


<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="forms.css">
</head>
<body style="text-align:center;" class="">
<div class="form">
<h1>Coders convention </h1>
<h2>Your details</h2>
<form action="" method="post">
First Name <input type="text" name="txtFirstName" value="<?php echo $fname;?>" /> 
Last Name <input type="text" name="txtLastName" value="<?php echo $lname;?>" /></br></br>
Address <input type="text" name="txtAddress" value="<?php echo $address; ?>" /> 
City <input type="text" name="txtCity" value="<?php echo $city;?>" /></br></br>
State <input type="text" name="txtState" value="<?php echo $state;?>" /> 
Zip <input type="text" name="txtZip" value="<?php echo $zip;?>" /></br></br>
  
Phone Number <input type="text" name="txtPhoneNo" value="<?php echo $phone;?>" /></br></br>
Email <input type="text" name="txtEmail" value="<?php echo $email;?>" /></br></br>
  
<input type="submit" value="Next" name="btnNext" /></br></br>
<input type="submit" value="Start Over" name="btnStartOver" />
</form>
</div>

</body>
</html>