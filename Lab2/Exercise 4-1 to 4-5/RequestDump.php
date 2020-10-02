<?php
if(isset($_REQUEST['submit'])) {
    include('inc_RequestDump.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Request Dump</title>
    <style type="text/css">
        .style1 {color: #000099}
    </style>
</head>
<div class="style1" align="center">
<body>
    <form name="test" action="">
    <input type="text" name="var1" /><br />
    <input type="text" name="var2" /><br />
    <input type="text" name="var3" /><br />
    <input type="text" name="var4" /><br />
    <input type="submit" name="submit" value="Test Include" /><br />
    </form>
</body>
</div>
</body>
</html>