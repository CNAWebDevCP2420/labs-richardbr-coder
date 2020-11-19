<?php

session_start();
$java="";
$php="";
$mysql="";
$apache="";
$web="";
  
if(isset($_SESSION["java"]))
$java = $_SESSION["java"];
  
if(isset($_SESSION["php"]))
$php = $_SESSION["php"];
  
if(isset($_SESSION["mysql"]))
$mysql = $_SESSION["mysql"];

  
if(isset($_SESSION["apache"]))
$apache = $_SESSION["apache"];

if(isset($_SESSION["web"]))
$web = $_SESSION["web"];


if(isset($_POST['btnNext']))
{
  

  
if(isset($_POST['chkJava']))
$_SESSION["java"] = "Yes";
else
$_SESSION["java"] = "No";
  
if(isset($_POST['chkPhp']))
$_SESSION["php"] = "Yes";
else
$_SESSION["php"] = "No";
  
if(isset($_POST['chkMysql']))
$_SESSION["mysql"] = "Yes";
else
$_SESSION["mysql"] = "No";
  
if(isset($_POST['chkApache']))
$_SESSION["apache"] = "Yes";
else
$_SESSION["apache"] = "No";
  
if(isset($_POST['chkWeb']))
$_SESSION["web"] = "Yes";
else
$_SESSION["web"] = "No";
  
header("location: confirmpage.php");
  
}
if(isset($_POST['btnBack']))
{
header("location: companyinfo.php");
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
<form method="post">
<input type="checkbox" name="chkJava" value="java" <?php if($java === 'Yes') echo 'checked="checked"';?> /> Javascript <br><br>
<input type="checkbox" name="chkPhp" value="PHP" <?php if($php === 'Yes') echo 'checked="checked"';?> >PHP <br></br>
<input type="checkbox" name="chkMysql" value="MySQL" <?php if($mysql === 'Yes') echo 'checked="checked"';?>>MySql<br></br>
<input type="checkbox" name="chkApache" value="Apache" <?php if($apache === 'Yes') echo 'checked="checked"';?> >Apache<br></br>
<input type="checkbox" name="chkWeb" value="Web Services" <?php if($web === 'Yes') echo 'checked="checked"';?> >Web Services</br></br>   
<form action="" method="post">

  
<input type="submit" value="Next" name="btnNext" /></br></br>
<input type="submit" value="Back" name="btnBack" /></br></br>
<input type="submit" value="Start Over" name="btnStartOver" />
</form>
</div>

</body>
</html>

