<!-- Question 1: create new file -->
<!-- Question 2: create html setup for php -->
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Interest Array</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <!-- Question 3: adding the php delimiter -->
        <?php
        #Question 4: Adding interest rate varibles
            $InterestRate1 = .0725;
            $InterestRate2 = .0750;
            $InterestRate3 = .0775;
            $InterestRate4 = .0800;
            $InterestRate5 = .0825;
            $InterestRate6 = .0850;
            $InterestRate7 = .0875;
        
        #Adding elements to the array
        $interestArray = array($InterestRate1, $InterestRate2, $InterestRate3,
                                $InterestRate4, $InterestRate5, $InterestRate6,
                                $InterestRate7);

        #Displaying array elemtents
        foreach($interestArray as $rate)
        {
            echo $rate;
            #this puts the next interest rate on it's own line
            print("<br>");
        }

        ?>
    </body>
</html>