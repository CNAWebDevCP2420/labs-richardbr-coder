<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>Bowlers</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
 <p>
<?php
if(empty($_POST['name']) || empty($_POST['age']))     
  echo "<p>You must enter your name. Click your browser's Back button to return to the Guest Book.</p>\n"; 
  else 
  {     
  $Name = addslashes($_POST['name']);     
  $Age = addslashes($_POST['age']); 
 $Average = addslashes($_POST['average']);     
  $a = fopen("bowlers.txt", "ab");     
  if(is_writeable("bowlers.txt")) 
  {          
   if(fwrite($a, $Name . ", " .$Age . ", " .$Average ."\n"))             
  echo "<p>Thank you for signing!</p>\n";          
  else               
  echo "<p>Cannot register your name.</p>\n";     
  }
  else         
  echo "<p>Cannot write .</p>\n";     
  fclose($a); 
  } 
 ?>
 </p>
 </body>
 </html>