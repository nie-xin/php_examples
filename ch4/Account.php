<?php
class Account {
    public $balance;

    function __construct( $balance ) {
        $this->balance = $balance;
    }
}

class Person {
    private $name;
    private $age;
    private $id;
    public $account;

    function __construct( $name, $age, Account $account ) {
        $this->name = $name;
        $this->age = $age;
        // This is a reference to Account class
        $this->account = $account;
    }

    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function getId() {
        return $this->id;
    }

    function __toString() {
        $desc = $this->getName();
        $desc .= " (age " . $this->getAge() . ")";
        $desc .= " (id ". $this->getId() . ")";

        return $desc;
    }
    function setId( $id ) {
        $this->id = $id;
    }

    function __clone() {
        $this->id = 0;
        // Attention: if we need clone object points to different object, we have to clone the reference as well.
        $this->account = clone $this->account;
    }
}

$person = new Person( "bobo", 44, new Account(200) );
$person->setId(343);
print $person . "\n";
// $person2 = clone $person;

// $person->account->balance += 10;
// print $person2->account->balance;