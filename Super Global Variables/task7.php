<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["visitor"]))
{
    $_SESSION["visitor"] = 0;
}
$_SESSION["visitor"]++;

echo "the number of visitor" . " " .  $_SESSION["visitor"];

?>
</body>
</html>