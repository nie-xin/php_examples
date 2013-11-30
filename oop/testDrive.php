<?php
require 'Courier.php';
require 'PigeonPost.php';
require 'MonotypeDelivery.php';

$mono = new Courier('Monosapce Delivery');
var_dump($mono);
echo "Courier Name: " . $mono->name;
/*$mono->ship($parcel);*/

// find couriers in Spain:
$spanish_couriers = Courier::getCouriersByCountry('Spain');

$courier = new PigeonPost('Local Avian Delivery Ltd');

if ($courier instanceOf Courier) {
    echo $courier->name . " is a Courier\n";
}
if ($courier instanceOf PigeonPost) {
    echo $courier->name . " is a PigeonPost\n";
}
if ($courier instanceOf Parcel) {
    echo $courier->name . " is a Parcel\n";
}
?>
