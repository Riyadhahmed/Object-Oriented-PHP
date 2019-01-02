<?php

/* 

In oop php serialize() convert the object to comma separated strings

*/

class Member
{
    public $Name="Masud Alam";
    public $Email="masud@mail.com";
    public $mobile="01788990099";
    public  $address="Dhaka,Bangladesh";
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
  
$member = new Member();
$member->username = "Riyadh Ahmed";
$member->login();
  
$memberString = serialize($member);
echo "Converted the Member to a string: $memberString" . '<br/>';

$member2 = unserialize( $memberString );
echo $member2->username . " is " . ( $member2->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
  
class SleepTest{
    public $Name="Masud Alam";
    public $Email="masud@mail.com";
    public $mobile="01788990099";
    public  $address="Dhaka,Bangladesh";
    public function __sleep(){
      return ["Name","Email"];
    }
  }
    
  $member = new SleepTest();
    
  $memberString = serialize( $member );
   
  echo $memberString;


  class Connection
{
    protected $link;
    private $dsn, $username, $password;
     
    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }
     
    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }
     
    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }
     
    public function __wakeup()
    {
        $this->connect();
    }
}

$test = new Connection('localhost:test', 'root', '');
?>
