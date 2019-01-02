<?php

/*  using parent function from a child class by parent keyword and scope :: resolution operator */

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

    public function login(){
        parent :: login();
        echo "Log entry : ". $this->username . ' is ' . ( $this->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
    }
    public function createForum( $forumName ) {
      echo "$this->username created a new forum: $forumName<br>";
    }
    public function banMember( $member ) {
      echo "$this->username banned the member: $member->username<br>";
    }
  }

 $admin = new Administrator ();
 $admin->username = "Rayhan Hossain";
 $admin->login();  // child method overriding // child method called instead parent login method
 

?>