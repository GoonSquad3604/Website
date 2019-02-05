<?php

function session($key)
{
    if (isset($_SESSION[$key])) {
	    return $_SESSION[$key];
	} else {
	    return '';
	}
}

function setSession($key, $value)
{
	$_SESSION[$key] = $value;
}

function get($key)
{
	if (isset($_GET[$key])) {
		return $_GET[$key];
	}
	return null;
}
function getInt($key)
{
	$int = get($key);
	$int = preg_replace('/[^0-9]/', '', $int);
	return $int;
}

function post($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}
	return null;
}

function connect()
{
	$db = mysqli_connect('localhost', 'root', '', 'goonsquad');
	return $db;
}