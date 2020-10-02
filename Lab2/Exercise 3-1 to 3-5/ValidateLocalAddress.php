<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Local Address</title>
</head>
<body>
<h1>Validate Local Address</h1><hr />
<?php
$email = array( 
    "jsmith123@example.org", 
    "john.smith.mail@example.org", 
    "john.smith@example.org", 
    "john.smith@example", 
    "jsmith123@mail.example.org");

    foreach ($email as $emailAddress){ 
        echo "The email address &ldquo;" . $emailAddress .
            "&rdquo; ";
        if (preg_match("/^(([A-Za-z]+\d+)|" .
                "([A-Za-z]+\.[A-Za-z]+))" .
                "@((mail\.)?)example\.org$/i",
                $emailAddress)==1)
            echo " is a valid e-mail address.";
        else    
            echo " is not a valid e-mail address.";
    }
?>
</body>
</html>