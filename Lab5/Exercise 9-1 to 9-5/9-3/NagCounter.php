<?php
$Err = FALSE;
$Regcheck = FALSE;
$DisplayMessage = FALSE;
$RegName = "";
$RegEmail = "";

#Check if the cookie holds a value
if((isset($_COOKIE['Name'])) && (isset($_COOKIE['Email']))){
    $Regcheck = TRUE;
    $RegName = $_COOKIE['Name'];
    $RegEmail = $_COOKIE['Email'];
    setcookie("Name", $RegName, time() + (60*60*24*365));
    setcookie("Email", $RegEmail, time() + (60*60*24*365));
}
else{
    if(isset($_COOKIE['Counter'])){
        $Counter_value = $_COOKIE['Counter'] + 1;
    }
    else{
        $Counter_value = 1;
    }
    if($Counter_value >= 5){
        $DisplayMessage = TRUE;
        $Counter_value = 0;
    }
    if(isset($_POST['submit'])){
        if(strlen(trim($_POST['Name'])) > 0){
            $RegName = stripslashes(trim($_POST['Name']));
        }
        else{
            $Content .= "Name is Required\n";
            $Err = TRUE;
        }
        if(strlen(trim($_POST['name'])) >0){
            $RegEmail = stripslashes(trim($_POST['email']));
        }
        if(preg_match("/^[\w-]+(\.[\w-]+)*@" . 
        "[\w-]+(\.[w-]+)*(\.[a-zA-Z]{2,})$/i", $RegEmail) == 0){
            $content .= "Invalid email address \n";
            $Err = TRUE;
            $RegEmail = "";
        }
        
    }
    else{
        $Content .= "Email address is required \n";
        $Err = TRUE;
    }
    if($Err = FALSE){
        $Regcheck = TRUE;
        setcookie("Counter","",time()-3600);
        setcookie("Name", $RegName, time()+(60*60*24*365));
        setcookie("Email", $RegEmail, time()+(60*60*24*365));
    }
}
if(!$Regcheck){
    setcookie("Counter", $Counter_value, time()+(60*60*24*365));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if($Regcheck){
    echo "
    Name: $Regcheck\n
    Email: $RegEmail\n
    ";
}
else{
    if($DisplayMessage){
        echo "Please regester! \n";
    }
echo "<h1>Nag Counter</h1>";  
?>
<?php echo $_GET["name"];?>
<?php echo $_GET["email"];
}
?>
</body>
</html>