<?php
$classname = "Task";

$path = "./{$classname}.php";
if ( ! file_exists($path)) {
	throw new Exception( "no such file as {$path}");
}

require_once("$path");

$classname = "tasks\\$classname";
if ( ! class_exists($classname)) {
	throw new Exception("No sucn class as $classname");
}

$myObj = new $classname();
$myObj->doSpeak();