<?php

/*

OOP Overloading

overloading is a technique to create class properties and class method if they are not define

let we have class with some properties and method

if we need a properties or method that does not defined into the class what we have to do to create new properties or methods
this procedure is called overloading

There are 2 types of overloading

1, Property overloading
2. Function/ Method overloading


 ------------------  Property overloading ----------------------

 by using __set() or __get() magic method we can create property overloading
 by using __isset() magic method we can check property is set
 and  __unset() magic method we can unset the property

*/

class testOverloading {
    public $data = array();

    public function __set($name, $value){

        echo "Setting '$name' Property with '$value'" . '<br/>';
        $this->data[$name] = $value;
    }

    public function __get($name){
        echo "Getting '$name' Property with Value : ";
        if(array_key_exists($name, $this->data)){
          return $this->data[$name]. '<br/>';
        }      
    }

    public function __isset($name) {
        echo "Is '$name' Property set ?" . '<br/>';
        echo isset($this->data[$name]) ? ' Yes ' . $name .' Property is set' : ' No '. $name. ' Property is not set';
        echo "<br/>";
    }

    public function __unset($name){
        echo "Unsetting $name  property". '<br/>';
        unset($this->data[$name]);
        echo "<br/>";
    }
}

$test = new testOverloading();
$test->name = 'Riyadh Ahmed';
echo $test->name;
$test->test=12;
echo $test->test;
isset($test->name). '<br/>';  // checking name property is set or not //true
isset($test->test). '<br/>';   // checking name property is set or not // true
isset($test->another). '<br/>';  // checking name property is set or not  //false

unset($test->test);  // un setting test property
isset($test->test). '<br/>';   // checking name property is set or not // false


/*
 ------------------  Method overloading ----------------------
  by using __call() we can create method/function overloading
  and  __callStatice() magic method we can create static method/function overloading
*/


class methodOverloading {

    public function __call($method,$params) {
        echo "Calling a $method method with these argument " . implode(',' , $params);
        echo "<br/>";
    }


    public static function __callStatic($method,$params)
    {
        echo "Calling static method with these argument '$method' " . implode(', ', $params). "\n";
        echo "<br/>";
    }
}

$m = new methodOverloading();
$m->member('Riyadh Ahmed',20, 'Software Engineer');

methodOverloading :: subtract(20, 10);