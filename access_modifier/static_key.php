<?php


// -------   Visibility or Access Modifier of a class OOP ------ \\

/*  Static Keyword

To access of properties or methods of a class without creating object of a class we use static keyword 

use static keyword before declare properties or methods name

To access a static property or method we use scope resolution operator ::


*/

class testStatic{
  // static methods and properties are defined with the static keyword.
  //You can add static keyword before or after visibility (Public, Private, Protected)
  public static $count = 0;
  static public $counter = 1; 
   
  public static function counter() {
    echo "Its Static Counter : " . self :: $count++ . '<br/>';
  }

  static public function anotherCounter(){
       
  }
}

testStatic :: $count = 5;
echo "<br>";
testStatic :: counter();
testStatic::counter();
testStatic::counter();
echo "<br>";

/* Late Static Binding

if we access to a static method or property of a class we use self :: static property/method
by using self we can access only base class properties or methods
but if we need to access parent class static properties or method?

then we need to use static :: static property/method
this is called late statice binding

*/

class Course{
    protected static $courseName = 'Professional PHP';

    public static function getCourseName(){
        return self::$courseName."<br>";
    }

    public static function getAnotherCourse () {
        return static :: $courseName. "<br>";
    }
}
  
class Student extends Course{
    protected static $courseName = 'Laravel';   
}
  
// normal statice example
echo Student::getCourseName(); // this is echo Professional PHP, not Laravel because of self ::

// late statice example
echo Student :: getAnotherCourse();
?>
