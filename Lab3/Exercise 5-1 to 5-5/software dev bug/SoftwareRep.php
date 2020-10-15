<?php
$servername = "localhost";
    $username = "";#your mysql username here
    $password = "";#your mysql password here
    $dbname = "SoftwareReport";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); #creating the connection using the above data
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);#settig up the error mode of the connection

    $pname = $_POST['pname'];#fetching the variables from posted html form
    $version = $_POST['version'];
    $hardware = $_POST['hardware'];
    $os = $_POST['os'];
    $freq = $_POST['freq'];
    $solutions = $_POST['solutions'];

    $insQuery = "insert into table1 values (:pname,:version,:hardware,:os,:freq,:solutions)";  #create the mysql query
    $insStmt = $conn->prepare($insQuery);#prepare a preparedstatement using the above the query
    $insStmt->bindParam(':pname',$pname);#binding the parameters (placeholders) with variables
    $insStmt->bindParam(':version',$version);
    $insStmt->bindParam(':hardware',$hardware);
    $insStmt->bindParam(':os',$os);
    $insStmt->bindParam(':freq',$freq);
    $insStmt->bindParam(':solutions',$solutions);
    $insStmt->execute();#execute the prepared statement.
?>