<?php
abstract class DomainObject {
	private $group;

	public function __construct() {
		// 延迟静态绑定
		$this->group = static::getGroup();
	}

	public static function create() {
		return new static();
	}

	// static method
	static function getGroup() {
		return "default";
	}
}

class User extends DomainObject {

}

class Document extends DomainObject {
	static function getGroup() {
		return "document";
	}
}

class SpreadSheet extends Document {

}

// User 调用的是在DomainObject中定义的静态方法，并采用静态延迟调用
print_r(User::create());
// Document(SpreadSheet的父类)覆盖了该静态方法Ò
print_r(SpreadSheet::create());