<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$link = mysqli_connect('localhost', 'root', 'root', 'test') or die(mysql_error());

$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);

$result = mysqli_query($link, " SELECT * FROM `users` WHERE `username` = '$username' AND
	`password` = '$password' LIMIT 1") or die(mysql_error());

if (mysqli_num_rows($result) != 0) {

	echo "You are in!!";

} else {

	echo "Failed to get in.....";
}

?>