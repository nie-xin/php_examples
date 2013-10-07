<?php
function __autoload( $classname ) {
	inclide_once("$classname.php");
}

$product = new ShopProduct( 'The darkening', 'Harry', 'Hunter', 12.99);
