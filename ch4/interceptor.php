<?php
class Person {
    // private $_name;
    // private $_age;
    // private $writer;
    private $name;
    private $age;
    private $id;

    // function __construct(PersonWriter $writer) {
    //     $this->writer = $writer;
    // }
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function __destruct() {
        if ( !empty( $this->id) ) {
            print "saving person\n";
        }
    }

    function setID( $id ) {
        $this->id = $id;
    }

    function __clone() {
        $this->id = 0;
    }

    function getID() {
        return $this->id;
    }

    // function __call($methodname, $args) {
    //     echo $methodname;
    //     if (method_exists($this->writer, $methodname)) {
    //         //echo "method exists";
    //         return $this->writer->$methodname($this);
    //     }
    // }

    // function __get( $propety ) {
    //     $method = "get{$propety}";
    //     //echo "Method name: " . $method . "\n"; 
    //     if ( method_exists($this, $method)) {
    //         return $this->$method();
    //     } else {
    //         echo "method doesn't exist\n";
    //     }
    // }

    // function __isset( $property ) {
    //     $method = "get{$property}";
    //     return ( method_exists($this, $method));
    // }

    // function __set($property, $value) {
    //     $method = "set{$property}";
    //     if ( method_exists($this, $method)) {
    //         return $this->$method($value);
    //     }
    // }

    // function setName( $name ) {
    //     $this->_name = $name;

    //     if (! is_null($name)) {
    //         $this->_name = strtoupper($this->_name);
    //     }
    // }

    // function setAge( $age ) {
    //     $this->_age = strtoupper($age);
    // }

    // function getName() {
    //     return "Bob";
    // }

    // function getAge() {
    //     return 44;
    // }
}

// echo "Start the test: \n";
// $p = new Person();
// print $p->name;
// echo "\n";

// if ( isset($p->name)) {
//     print $p->name;
// }
// echo "\n";

// $p->name = "bob";
// echo $p->name;

class PersonWriter {

    function writeName ( Person $p ) {
        print $p->getName() . "\n";
    }

    function writeAge( Person $p ) {
        print $p->getAge() . "\n";
    }
}

// $person = new Person( new PersonWriter() );
// echo "Name is: " . $person->writeName() . "\n";

$person1 = new Person("bob", 44);
$person1->setID(343);
$person2 = clone $person1;
echo $person2->getID();