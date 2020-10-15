<?php
// Create database connection where root is the user name and then the password and then comes the database name
$db = mysqli_connect("localhost", "root", "password", "image_upload");

// Initialize message variable to show the user the files are uploaded successfully
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
   // Get image name
   $image = $_FILES['image']['name'];
   // Get image description
   $image_text = mysqli_real_escape_string($db, $_POST['image_description']);
    // get person name
    $person_text = mysqli_real_escape_string($db, $_POST['person_name']);

   // image file directory
   $target = "images/".basename($image);

    // sql query to upload
   $sql = "INSERT INTO images (image, image_text, person_text) VALUES ('$image', '$image_text', '$person_text')";
  
    // execute query
   mysqli_query($db, $sql);

    // to confirm that the images from local to server are uploaded!
   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
       $msg = "name, description and Images uploaded successfully";
   }else{
       $msg = "Failed to upload!";
   }
}
?>