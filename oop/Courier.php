<?php
/*namespace shipping;*/

class Courier
{
    public $name;
    public $home_country;

    public function __construct($name) {
        $this->name = $name;

        return true;
    }

    public function ship($parcel) {
        // send parcel to destination
        return true;
    }

    public static function getCouriersByCountry($country) {
        // get a list of couriers with their home country
        // create a Courier object for each result
        // return an array of the results
        //
        return $courier_list;
    }

    public function calculateShipping($parcel) {
        $rate = 1.78;
        $cost = $rate * $parcel->weight;

        return $cost;
    }
} // end of Courier class
?>
