<?php
define('DB_HOST', 'db');
define('DB_NAME', 'homestead');
define('DB_USER','homestead');
define('DB_PASSWORD','secret');

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser()
{
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if ('userNname' != $userName) {
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	header("location: pro.php");
}
}}


function SignUp()
{
if(!empty($_POST['user']))
{
	$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
		if ('userNname' != $_POST['user']) {
		if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>
