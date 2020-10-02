<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Strength</title>
</head>
<body>
<?php
  
    //Function that validates password
    function validate_password($password)
    {
        $reg1='/[A-Z]/'; //Upper case Check
        $reg2='/[a-z]/'; //Lower case Check
        $reg3='/[^a-zA-Z\d\s]/'; // Special Character Check
        $reg4='/[0-9]/'; // Number Digit Check
        $reg5='/[\s]/'; // Number Digit Check

        if(preg_match_all($reg1,$password, $out)<1) 
            return "There should be atleast one Upper Case Letter...";

        if(preg_match_all($reg2,$password, $out)<1) 
            return "There should be atleast one Lower Case Letter...";

        if(preg_match_all($reg3,$password, $out)<1) 
            return "There should be atleast one Special Character...";

        if(preg_match_all($reg4,$password, $out)<1) 
            return "There should be atleast one numeric digit...";
        
        if(preg_match_all($reg5,$password, $out)>=1) 
            return "Spaces are not allowed...";

        if(strlen($password) <= 8 || strlen($password) >= 16 ) 
            return "Password Length should be between 8 and 16";

        return "OK";
    }
    
    //Considering an array of passwords
    $passwords = array("pH6jG&123","V@1oh jio2", "php^learn445", 
        "BMW@12789", "World@2016" ,"Toyota12567","Tfwo!*&dd","W1@2j","Test@1234", "dUkE@0007");
    
    

    
    //Printing Valid and Invalid Passwords
    for($i=0; $i<count($passwords); $i++)
    {
        $res = validate_password($passwords[$i]);
    
        echo $passwords[$i];
        echo "\t : \t ";
    
    if($res == "OK")
    {
        echo "Stronger";
    }
    else
    {
        echo $res;
    }
        echo "<br><br>";
    }

    echo "</br></br>Enter a password to see if it meets the 
            standards for a strong password!";

    //response to the button, try it out! :)
    if (isset($_GET['password'])){
        $inputPassword = $_GET['password'];
        $res = validate_password($inputPassword);
            
        if ($res == "OK")
        {
            echo "<p>{$testWord} Stronger</p>";
        } else{
            echo "<p> $res </p>";
        }
    }
?>
<!--
    I answered the question but I like user inputs, 
    Hope it's okay that I added a input here! 
 -->
<form action="PasswordStength.php" method="get">
<p><input type="text" name="password" /></p>
<p><input type="submit" value="Submit" /></p>
</form>
</body>
</html>