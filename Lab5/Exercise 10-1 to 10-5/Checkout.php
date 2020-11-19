<?php
session_start();
require_once("class_OnlineStore.php");
$storeID = $_GET['CheckOut'];
$storeInfo = array();
if (class_exists("OnlineStore")) {
     if (isset($_SESSION['currentStore']))
          $Store = unserialize($_SESSION['currentStore']);
     else {
          $Store = new OnlineStore();
     }
     $Store->setStoreID($storeID);
     $storeInfo = $Store->getStoreInformation();
}
else {
     $ErrorMsgs[] = "The OnlineStore class is not available!";
     $Store = NULL;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $storeInfo['name']; ?> Checkout</title>
<link rel="stylesheet" type="text/css" href="<?php echo
          $storeInfo['css_file']; ?>" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1><?php echo htmlentities($storeInfo['name']); ?></h1>
<h2>Checkout</h2>
<?php
$Store->checkout();
?>
</body>
</html>