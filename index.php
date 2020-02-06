<!DOCTYPE html>
<html>
<head>
	<title>PHP Calendar</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include './Controllers/Calendar.php';
 
 
$calendar = new Calendar();
 
echo $calendar->build_calendar();

?>
</body>
</html>     