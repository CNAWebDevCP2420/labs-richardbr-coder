<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pefect Palindrome</title>
</head>
<body>
    <?php

        if (isset($_GET['palindrome'])){
            $testWord = $_GET['palindrome'];
            $reverseWord = strrev($testWord);
            
            if ($testWord == $reverseWord)
            {
                echo "<p>{$testWord} is a palindrome</p>";
            } else{
                echo "<p>{$testWord} is not a palindrome</p>";
            }	
        }
        else{
            echo "<p>Please enter a word to see if it's a perfect palindrome</p>";
        }

    ?>
    
<form action="PerfectPalindrome.php" method="get">
<p><input type="text" name="palindrome" /></p>
<p><input type="submit" value="Submit" /></p>
</form>

</body>
</html>