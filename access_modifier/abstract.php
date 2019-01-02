<?php

/*

---------- abstract class -----------
abstract class is a class which you can not create an class object or can not Object instantiate 

that means you can not create an object or instance of abstract class

to create an abstract class simple use abstract keyword before declare class name

abstract class can be extended


---------- abstract method -----------

abstract method is a method/function which hasn't any body/definition

*/


abstract class AbstractClass{
    // Our abstract method only needs to define the required arguments
    abstract protected function getName($name);
    abstract protected function setName($name);
    abstract protected function anotherName($name);
}
 
class childClass extends AbstractClass{
    public function getName($name) {
        return 'Hi '.$name.' !';
    }

    public function anotherName($name) {
        return 'Hi '. $prefix . ' ' .  $name.' !';
    }

    public function setName($name, $prefix = 'Mr.') {
        return 'Hi '. $prefix . ' ' .  $name.' !';
    }
}


// $abs = new AbstractClass;  // error whice creating object
 
$class = new childClass;
echo $class->getName('Shahriar'), '<br/>';
// echo $class->anotherName('Shahriar', 'Mr'), '<br/>'; // error while calling abstract function cz abstract method hasn't 2 parameters
echo $class->setName('Shahriar'), '<br/>';


// $abs = new testAbstract(); // error while creating object