<?php

/* Final class 

final keyword has used to prevent inheritance from parent class

if we used final keyword into a class, this class can not be extended to another class
same as if we use final keyword in to a class properties or methods those aren't be accessible or cannot be inheritance to
child class

*/

class Member {
  public $username = "";
  private $loggedIn = false;

  public final function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
  public function isLoggedIn() {
    return $this->loggedIn;
  }
}
 
class NaughtyMember extends Member {

//   public function login() {  // error ocoured cz login method used final key in parent class
//     $this->loggedIn = true;   
//   }

}


final class test {
    // This class can't be extended at all
  }
//   class Administrator extends test{
//   // Will show Fatal Error
//   }


?>