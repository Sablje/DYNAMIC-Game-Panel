<?php
$iplogfile = 'miss-svijet.php';
$ipaddress = $_SERVER['REMOTE_ADDR'];
$webpage = $_SERVER['SCRIPT_NAME'];
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen($iplogfile, 'a+');
chmod($iplogfile, 0777);
fwrite($fp, '['.$timestamp.']: '.$ipaddress.' '.$webpage.' '.$browser. "\n<br><br>");
fclose($fp);
?>

and the result is a nice web HTML log file
logs/ip-address-mainsite.html

<!DOCTYPE html><!-- HTML5 -->
<html>
<head>
<body bgcolor="#000000">
<title>Nemas pristup ovoj stranici!</title>

</head>

<body>
<font color="#7FFF00">
<center>Nemas pristup ovoj stranici!</center>
<font color="gold">
<br><center>
<br><br>
</html>

