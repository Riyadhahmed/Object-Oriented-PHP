<?php

// -------   Visibility or Access Modifier of a class OOP ------ \\

/* There are 3 types of access modifier in a class are

1. Public - accessible from own class, child class and outside from the class
2. Private - only access from own class. Can not access from child class or outside of a class
3. Protected  - access fom own class also from child class but not from outside of a class
4. Static


*/


class GrandFather {
    public $g_name = "Arif Ahmed";
    private $g_age = 60;
    protected $g_assets = '20 Acors';

    public function getName(){
        return $this->g_name;
    }

    protected function getAssets () {
        return $this->g_assets;
    }

    private function getAge () {
        return $this->g_age;
    }

    function getPrivate(){
        return $this->g_assets;
    }
}

class Daddy extends GrandFather {

    public $d_name = 'Sakib Khan';
    private $d_age = 35;
    protected $d_salary = 40000;

    private function getFatherName() {
        $this->d_name;
    }

    function getGrandFatherName () {
        return $this->g_name;
    }

    function getGrandFatherAssets () {
        return $this->g_assets;
    }

    function getGrandFatherAge () {
        return $this->g_age;
    }

}


$grand = new GrandFather();
echo $grand->getName() . '<br/>';
// echo $grand->g_age;  // not accessible a private property outside of the class
// echo $grand->getAssets() . '<br/>'; // not accessible from outside a protected property
echo $grand->getPrivate() . '<br/>'; // access using own class



$father = new Daddy();
// echo $father->getFatherName() . '<br/>'; // not accessible a private function outside of the class
echo $father->getGrandFatherName() . '<br/>';
// echo $father->getGrandFatherAge() . '<br/>';  // not accessible a private property
// echo $father->childAge  . '<br/>'; // not accessible from outside a private property
echo $father->getGrandFatherAssets() . '<br/>'; 

?>