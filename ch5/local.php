<?php
namespace com\getinstance\util;
require_once 'global.php';

class Lister {
	public static function helloWorld() {
		print "hello from " . __NAMESPACE__ . "\n";
	}
}

Lister::helloWorld();	// local 
\Lister::helloWorld();	// global