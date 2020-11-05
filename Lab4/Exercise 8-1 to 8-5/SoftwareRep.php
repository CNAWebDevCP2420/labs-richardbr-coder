<?php
$servername = "localhost";
    $username = "root";    
    $password = "root";   
    $dbname = "SoftwareReport";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     

    $pname = $_POST['pname'];         
    $version = $_POST['version'];
    $hardware = $_POST['hardware'];
    $os = $_POST['os'];
    $freq = $_POST['freq'];
    $solutions = $_POST['solutions'];

    $insQuery = "insert into table1 values (:pname,:version,:hardware,:os,:freq,:solutions)";  
    $insStmt = $conn->prepare($insQuery);    
    $insStmt->bindParam(':pname',$pname);  
    $insStmt->bindParam(':version',$version);
    $insStmt->bindParam(':hardware',$hardware);
    $insStmt->bindParam(':os',$os);
    $insStmt->bindParam(':freq',$freq);
    $insStmt->bindParam(':solutions',$solutions);
    $insStmt->execute();        
?>