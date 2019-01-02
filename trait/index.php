<?php

/*

In OOP PHP we can not multiple inheritance of a class cz php oop is a single inheritance language

trait is a concept to use multiple inheritance features in oop php

'use' keyword is to use trait in a class

trait is like a class but can not create object from trait but we can add properties or methods

*/

trait Foo {
  public $name;
  private $mobile;

  public function hello($name) {
      echo "Say hello to $name";
  }

  public function user($name, $mobile) {
    echo "Member Name is :  $name" . '<br/>';
    echo "Member Mobile is :  $mobile";
  } 
}

class Member {
    use Foo;
}

$obj = new Member;
$obj->hello('Riyadh Ahmed');
echo '<br/>';
$obj->user('Sakib AL Hasan', '01851334231');
echo '<br/>';

/*

if we use same methods and property in traits , child class, parent class

Then the priority of getting the method first is child class, then trait and then parent class

*/
class Base{
    public function sayHello(){
        echo "say hello from Parent class";
   }
}

trait trt{
   public function sayHello(){
       echo "say hellow from trait";
   }
}

class Child extends Base{

   use trt;
   public function sayHello(){
       echo "hello from child class";
   }
}


echo '<br/>';
$objCls = new Child;

$objCls->sayHello();

/*

we can use multiple trait in a class
to use multiple trait into a class use all trait with comma separated and 'use' keyword

*/


trait Subscriber{
    public function subscriberLogin() {
        echo "You\'re Logged in as Subscriber". '<br/>';
    }
}
 
trait Contributor{
    public function contributorLogin() {
        echo "You're Logged in as Contributor". '<br/>';
    }
 
}
 
trait Author{
    public function AuthorLogin() {
        echo "You're Logged in as Author." . '<br/>';
    }
}
 
trait Administrator{
    public function AdministratorLogin(){
        echo "You're Logged in as Administrator" . '<br/>';
    }
}
 
class UserMember{
    use Subscriber, Contributor, Author, Administrator;
    public function run() {
        $this->subscriberLogin();
        $this->contributorLogin();
        $this->AuthorLogin();
        $this->AdministratorLogin();
        echo 'Members Login...done' . '<br/>';
    }
}

echo '<br/><br/><br/>';
$authentication = new UserMember();
 
$authentication->run();

/*

Conflict Resolution

if we use same function in multiple trait and use multiple trait into a class
then their have a conflict of that function and error arrived
to avoid conflict we have to use 'insteadof' operator or asign alias

*/

trait Foot{
    public function first_function(){
        echo "From Foot Trait";
    }
}
 
trait Bar{
    public function first_function(){
        echo "From Bar Trait";
    }
}
class Foobar {
    use Foot, Bar {
        // This class will now call the method
        // first function from Foo Trait only\
        Foot::first_function insteadof Bar;
        // first_function of Bar can be
        // accessed with second_function
        Bar::first_function as second_function;
    }
}
 
echo '<br/><br/><br/>';
$obj = new FooBar;
 
$obj->first_function();
echo '<br/><br/><br/>';
$obj->second_function();

/*

we know that we can use access modifier or visibility in trait as like a class
but we can change or add access modifier of a trait

*/

trait visible{
    public function pub(){
        echo "this is public method";
    }
    private function priv(){
        echo "this is private";
    }
    protected function proc(){
        echo "echo this is protected function";
    }
}
 
class cls{
    use visible{
        priv as public;
    }
    function callPriv(){
        $this->priv();
    }
}
 
echo '<br/><br/><br/>';
$objCls = new cls();
 
$objCls->pub();//echo this is public method
echo '<br/><br/><br/>';
//$objCls->priv();//This is private
 
$objCls->callPriv(); //this is private
 
echo '<br/><br/><br/>';

trait Calories {
    public $banana = 105;
    public $cake = 300;
    static public $donation = 205;
    public static function test(){
        return self::$donation;
    }
}
 
class Cookbook {
    use Calories;
    public $cake=300;  // error will appear if value is different from main trait properties value
}
 
$c = new Cookbook;
echo $c->banana;
echo '<br/><br/><br/>';
echo Cookbook::$donation;
echo '<br/><br/><br/>';
echo Cookbook::test();
?>