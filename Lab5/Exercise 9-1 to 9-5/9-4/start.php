<?php
session_start();
unset($_SESSION['count']);
header("Location: guess_form.php");

?>