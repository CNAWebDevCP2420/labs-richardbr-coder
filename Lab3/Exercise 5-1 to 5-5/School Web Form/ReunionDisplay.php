<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "image_upload");

// after the connection execution query the db named images to get the data
$result = mysqli_query($db, "SELECT * FROM images");
  
//while loop to get the data back to display
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
         echo "<img src='images/".$row['image']."' >";
         echo "<p>".$row['person_name']."</p>";
         echo "<p>".$row['image_description']."</p>";
      echo "</div>";
    }
?>