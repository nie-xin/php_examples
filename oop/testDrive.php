<?php
require 'Courier.php';

$mono = new Courier('Monosapce Delivery');
var_dump($mono);
echo "Courier Name: " . $mono->name;
/*$mono->ship($parcel);*/

// find couriers in Spain:
$spanish_couriers = Courier::getCouriersByCountry('Spain');

?>
