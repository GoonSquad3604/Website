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
<body style="font-family: sans-serif;">
<?php
session_start();
include("io.inc.php");
setSession('session',null);
echo("<center><h1><a href='index.php'>Continue</a></h1></center>");
