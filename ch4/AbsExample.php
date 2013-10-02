/**
 * abstract class: can not be instantiated directly. 
 * abstract class could be extended and implemented by his child.
 */

<?php
abstract class ShopProductWriter {
	protected $products = array();

	public function addProduct( ShopProduct $shopProduct ) {
		$this->products[] = $shopProduct;
	}
	// normally an abstract class contians at least an abstract function
	abstrac public function write();
}

class XmlProductWriter extends ShopProductWriter {
	public function write() {
		$str = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
		$str .= "<products>\n";
		foreach ( $this->products as $shopProduct ) {
			$str .= "\\t<product title=\"{$shopProduct->getTitle()}\">\n";
			$str .= "\t\t<summary>\n";
			$str .= "\t\t{$shopProduct->getSummaryLine()}\n";
			$str .= "\t\t</summary>\n";
			$str .= "\t</product>\n";
		}
		$str .= "</product>\n";
		print $str;
	}
}

class TextProductWriter extends ShopProductWriter {
	public function write() {
		$str = "PRODUCTS:\n";
		foreach ( $this->products as $shopProduct ) {
			$str .= $shopProduct->getSummaryLine() . "\n";
		}
		print $str;
	}
}