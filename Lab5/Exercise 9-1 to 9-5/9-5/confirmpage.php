<?php

session_start();
  

$fname = $_SESSION["fname"] ;
$lname = $_SESSION["lname"];
$address = $_SESSION["address"] ;
$city = $_SESSION["city"];
$state = $_SESSION["state"] ;
$zip = $_SESSION["zip"];
$phone = $_SESSION["phone"] ;
$email = $_SESSION["email"];
  
$cname = $_SESSION["cname"] ;
$caddress = $_SESSION["caddress"];
$ccity = $_SESSION["ccity"];
$cstate = $_SESSION["cstate"] ;
$czip = $_SESSION["czip"] ;
$cphone = $_SESSION["cphone"] ;
  
$java = $_SESSION["java"];   
$php = $_SESSION["php"];   
$mysql = $_SESSION["mysql"] ;   
$apache = $_SESSION["apache"];
$web = $_SESSION["web"];


if(isset($_POST['btnBack']))
{
header("location: seminars.php");
}

if(isset($_POST['btnStartOver']))
{
session_destroy();
header("location: index.php");
}

if(isset($_POST['btnRegister']))
{

// create database
$servername = "localhost";
$username = "root";
$password = "";

$msg="";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS Conference ";
if (mysqli_query($conn, $sql)) {
$msg = "Database created successfully <br>" ;
} else {
$msg = "\nError creating database (Check Already Exists): " . mysqli_error($conn) ."<br>";
}

/// end of create database
$conn = mysqli_connect($servername, $username, $password,"Conference");
//create table
$sql = "CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`fname` varchar(30) NOT NULL,
`lname` varchar(30) NOT NULL,
`address` varchar(100) NOT NULL,
`city` varchar(30) NOT NULL,
`state` varchar(60) NOT NULL,
`zip` varchar(10) NOT NULL,
`phone` varchar(10) NOT NULL,
`email` varchar(50) NOT NULL,
`cname` varchar(50) NOT NULL,
`caddress` varchar(100) NOT NULL,
`ccity` varchar(50) NOT NULL,
`cstate` varchar(100) NOT NULL,
`czip` varchar(10) NOT NULL,
`cphone` varchar(10) NOT NULL,
`semjava` varchar(3) NOT NULL,
`semphp` varchar(3) NOT NULL,
`semmysql` varchar(3) NOT NULL,
`semapache` varchar(3) NOT NULL,
`semweb` varchar(3) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";

if (mysqli_query($conn, $sql)) {
$msg = $msg . "Table userinfo created successfully <br>";
} else {
$msg = $msg . "Error creating table (Check Already exists): " . mysqli_error($conn) ."<br>";
}

$sql = "INSERT INTO `conference`.`employee` (`id`, `fname`, `lname`, `address`, `city`, `state`, `zip`, "
. "`phone`, `email`, `cname`, `caddress`, `ccity`, `cstate`, `czip`, `cphone`, `semjava`, "
. "`semphp`, `semmysql`, `semapache`, `semweb`) VALUES (NULL, '$fname', '$lname', '$address',"
. " '$city', '$state', '$state', '$state', '$email', '$cname', '$caddress', '$ccity', '$cstate', "
. "'$czip', '$cphone', '$java', '$php', '$mysql', '$apache', '$web');";
if (mysqli_query($conn, $sql)) {
$msg = $msg. "User Registered Successfully";
} else {
$msg = $msg."Error registering user: " . mysqli_error($conn);
}

mysqli_close($conn);

$_SESSION["msg"] = $msg;

header("location: showmessage.php");
  
}


?>


<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="forms.css">
</head>
<body>

<div class="form table">
<h1>Summary </h1>
<p> You entered the following information:</p>
<form action="" method="post">

<table border="1" >

  
<tr valign="top" >
<td class="table-inside" style="padding: 20px;">
  
<a href="index.php"><h2>Personal Information</h2></a></br>
First Name : <?php echo $fname; ?> </br>
Last Name : <?php echo $lname; ?> </br>
Address : <?php echo $address; ?> </br>
City : <?php echo $city; ?> </br>
State : <?php echo $state; ?> </br>
Zip : <?php echo $zip; ?> </br>
Phone : <?php echo $phone; ?> </br>
Email : <?php echo $email; ?> </br>
  
  
</td>
<td class="table-inside" style="padding: 20px;">
  
<a href="companyinfo.php"><h2>Company Information</h2></a></br>
Company Name : <?php echo $cname; ?> </br>
Address : <?php echo $caddress; ?> </br>
City : <?php echo $ccity; ?> </br>
State : <?php echo $cstate; ?> </br>
Zip : <?php echo $czip; ?> </br>
Phone : <?php echo $cphone; ?> </br>

  
</td>
<td class="table-inside" style="padding: 20px;">
  
<a href="seminars.php"><h2>Seminars </h2></a></br>
Javascript Seminar : <?php echo $java; ?> </br>
PHP Seminar : <?php echo $php; ?> </br>
MySql Seminar : <?php echo $mysql; ?> </br>
Apache Seminar : <?php echo $apache; ?> </br>
Web Services Seminar : <?php echo $web; ?> </br>

  
</td>
</tr>
  
</table>
<br>
<input type="submit" value="Register" name="btnRegister" /></br></br>
<input type="submit" value="Back" name="btnBack" /></br></br>
<input type="submit" value="Start Over" name="btnStartOver" />
</form>
</div>

</body>
</html>