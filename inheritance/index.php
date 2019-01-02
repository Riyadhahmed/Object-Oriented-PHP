<?php

// -------   Inheritance of a class OOP ------ \\
/*
In oop inheritance means get the access of property and method of a base class into child class 

private property or method can not be accessible from a base class


*/


class Member {
  public $username = "";
  private $loggedIn = false;
  public function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
  public function isLoggedIn() {
    return $this->loggedIn;
  }
}

class Administrator extends Member {
    public function createForum( $forumName ) {
      echo "$this->username created a new forum: $forumName<br>";
    }
    public function banMember( $member ) {
      echo "$this->username banned the member: $member->username<br>";
    }
  }

  // Create a new member and log them in
$member = new Member();
$member->username = "Masud Alam";
$member->login();
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

 $member->username = "Riyadh Ahmed"; 
 $member->logout(); 

 echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

 $admin = new Administrator ();
 $admin->username = "Rayhan Hossain";
 $admin->login();
 echo $admin->username . " is " . ( $admin->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
 $admin->createForum('W3xplorers Bangladesh') . "<br>";

 print_r($member) . "<br>";
 $admin->banMember( $member );

?>