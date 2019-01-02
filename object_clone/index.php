<?php

/*
object clone is a procedure that makes an object from another object
object clone is totally different from object copy

in object copy main object is copied by reference so if we change any property
or method main property value will be change

but if we clone an object there won't be any effect on main object change on cloned object

To copy an object from another object just store the main object as a value of another object



--------------  Copy object -----------

*/

class TestCopy {
    public $name;
    private $mobile;

    public function __construct($name,$mobile) {
        $this->name = $name;
        $this->mobile = $mobile;
    }

}

$test = new TestCopy('Riyadh Ahmed', '01851334238');
echo 'Result Before Copy' . '<br/>';
print_r($test);
echo '<br/>';
$copy = $test;
$copy->name = 'Sakib Al Hasan';
echo 'Result After Copy' . '<br/>';
print_r($copy);
echo '<br/>';
print_r($test);



/*
--------------  Clone object -----------
To copy an object from another object just use clone keyword while store the main object as a value of another object
*/

class TestClone {
    public $name;
    private $mobile;

    public function __construct($name,$mobile) {
        $this->name = $name;
        $this->mobile = $mobile;
    }

}
echo '<br/>';echo '<br/>';echo '<br/>';
$obj = new TestClone('Shariar khan', '01931212112');
echo 'Result Before Clone' . '<br/>';
print_r($obj);
echo '<br/>';
$clone = clone $obj;
$clone->name = 'Tamim Iqbal';
echo 'Result After Clone' . '<br/>';
print_r($clone);
echo '<br/>';
print_r($obj);


/*
--------------  Clone magic method -----------
if we clone any object the __clone() magic method has automatically called

*/

class MagicClone {
    public $name;
    private $mobile;

    public function __construct($name,$mobile) {
        $this->name = $name;
        $this->mobile = $mobile;
    }

    public function __clone() {
        echo "During Cloning I'm only Executing! And I can change anything\n";
        $this->mobile="01922009988";
    }

}
echo '<br/>';echo '<br/>';echo '<br/>';
$mg = new MagicClone('Shamsur Rahaman khan', '01931212112');
echo 'Result Before Clone' . '<br/>';
print_r($mg);
echo '<br/>';
$mgclone = clone $mg;
$mgclone->name = 'Tamim Iqbal';
echo 'Result After Clone' . '<br/>';
print_r($mgclone);
echo '<br/>';
print_r($mg);
?>