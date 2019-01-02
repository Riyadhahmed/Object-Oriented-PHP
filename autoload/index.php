<?php

/*

autoload the class

*/

function loadClass($class_name) {
    include "Classes/$class_name.php";
}

spl_autoload_register('loadClass');

$member = new Member();
echo  '<br/>';
$topic = new Topic('Software Development', $member);
?>
