/**
 * interface: pure template.
 */
<?php
interface Chargeable {
	// class implements interface should implement all its methods
	public function getPrice();
}

class ShopProduct implements Chargeable {
	public function getPrice() {
		return ($this->price - $this->discount);
	}
}