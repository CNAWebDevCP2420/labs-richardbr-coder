<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
session_start();
echo $_SESSION["msg"];
session_destroy();
?>
</body>
</html>