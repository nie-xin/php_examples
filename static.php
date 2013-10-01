<?php
abstract class DomainObject {
	public static function create() {
		//延迟静态绑定：类似self, 但指的是被调用的类，而不是包含类
		return new static();
	}
}

class User extends DomainObject {

}

class Document extends DomainObject {

}

// 这里create生成一个Document对象，而不是DomainObject对象
print_r(Document::create());