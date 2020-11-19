<?php
session_start();
  
$cname = "" ;
$caddress = "";
$ccity = "";
$cstate = "" ;
$czip = "" ;
$cphone = "" ;
  
if(isset($_SESSION["cname"]))
$cname = $_SESSION["cname"];

if(isset($_SESSION["caddress"]))
$caddress = $_SESSION["caddress"];

if(isset($_SESSION["ccity"]))
$ccity = $_SESSION["ccity"];

if(isset($_SESSION["cstate"]))
$cstate = $_SESSION["cstate"];

if(isset($_SESSION["cphone"]))
$cphone = $_SESSION["cphone"];

if(isset($_POST['btnNext']))
{
  
  
$_SESSION["cname"] = $_POST['txtCompanyName'];
  
$_SESSION["caddress"] = $_POST['txtAddress'];
$_SESSION["ccity"] = $_POST['txtCity'];
$_SESSION["cstate"] = $_POST['txtState'];
$_SESSION["czip"] = $_POST['txtZip'];
$_SESSION["cphone"] = $_POST['txtPhoneNo'];
  
  
header("location: seminars.php");
  
}

if(isset($_POST['btnBack']))
{
header("location: index.php");
}

if(isset($_POST['btnStartOver']))
{
session_destroy();
header("location: index.php");
}


?>

<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="forms.css">
</head>
<body>
<div class="form">
<h1>Coders convention </h1>
<h2>Your details</h2>
<form action="" method="post">
Company Name <input type="text" name="txtCompanyName" value="<?php echo $cname;?>" /> </br></br>
Address <input type="text" name="txtAddress" value="<?php echo $caddress;?>" /> City <input type="text" name="txtCity" value="<?php echo $ccity;?>" /></br></br>
State <input type="text" name="txtState" value="<?php echo $cstate;?>" /> Zip <input type="text" name="txtZip" value="<?php echo $czip;?>" /></br></br>
  
Phone Number <input type="text" name="txtPhoneNo" value="<?php echo $cphone;?>" /></br></br>

<input type="submit" value="Next" name="btnNext" />
<input type="submit" value="Back" name="btnBack" />
<input type="submit" value="Start Over" name="btnStartOver" />
</form>
</div>
</body>
</html>