<?php

/*  Check User Exist or Not */

class Member 
{
    protected $isLoggedIn=false;
    protected $role;

    protected $users=[
        ["username"=>"abc","password"=>"xyz","role"=>"subscriber"],
        ["username"=>"acb","password"=>"yxz","role"=>"admin"],
        ["username"=>"bca","password"=>"zxy","role"=>"super_admin"]
    ];

    public function Login($user,$pass){         
 
        foreach($this->users as $user_info){
            extract($user_info);
             
            if($username==$user && $password==$pass){
                $this->isLoggedIn=true;
                $this->role=$role;
            }
        }
    }
}
 
/**
* Child Class Check User Role
**/
class Role extends Member
{
     
    function __construct($user,$pass)
    {
        $this->Login($user,$pass);
            if($this->isLoggedIn){
                if($this->role=='subscriber'){
                    echo "You're Logged in as a Subscriber";
                }
                if($this->role=='admin'){
                    echo "You're Logged in as a Administrator";
                }
 
                if($this->role=='super_admin'){
                    echo "You're Logged in as a Super Administrator";
                }
            }
            else{
                    echo "Invalid Username/Password";
                }
 
    }
}
 
$login=new Role("acb","yxz");