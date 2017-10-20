<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>DATA INSTAGRAM<hr/>
<table>

<?php
$email=$_GET['email'];
$fullname=$_GET['fullname'];
$user=$_GET['user'];


echo "<tr><td>Email</td><td>:</td><td>$email</td></tr>";
echo "<tr><td>Full Name</td><td>:</td><td>$fullname</td></tr>";
echo "<tr><td>User</td><td>:</td><td>$user</td></tr>";
?>

</table>
</body>
</html>