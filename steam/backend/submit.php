<html>
<head>
<title>3604</title>
<style>
a
{
	color: blue;
}
a:active
{
	color: red;
}
</style>
</head>
<body style="font-family: sans-serif;" >
<center>

<?php
session_start();
include("io.inc.php");

$sql = "SELECT * FROM `codes` WHERE Type = 'Developer' ORDER BY ID asc";
$db = connect();
$result = $db->query($sql);
$data = $result->fetch_assoc();
if($data['Code']==$_POST['code'])
{
	setSession('session', 'Developer');
	echo("Logged in as: ");
	echo(session('session'));
	echo("<br><h2><a href='index.php'>Click to Continue</a>");
}
else
{
	$sql = "SELECT * FROM `codes` WHERE Type = 'Publisher' ORDER BY ID asc";
	$db = connect();
	$result = $db->query($sql);
	$data = $result->fetch_assoc();
	if($data['Code']==$_POST['code'])
	{
		setSession('session', 'Publisher');
		echo("Logged in as: ");
		echo(session('session'));
		echo("<br><h2><a href='index.php'>Click to Continue</a>");
	}
	else
	{
		echo("<h1>Incorrect Access Code</h1>
		The access code you typed is invalid. This may be because you incorrectly typed in the code,
		or the code may have expired.");
	}
}