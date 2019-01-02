<?php

/*

*/

require_once 'Member.php';
require_once 'Topic.php';

date_default_timezone_set('Asia/Dhaka');

$aMember = new Member( "Farhan", "Dhaka", 'http://w3programmers.com/' );
echo $aMember->getUsername() . " lives in " . $aMember->getLocation() ."<br>";
$aMember->save();
$aTopic = new Topic( "Futonto Golap", $aMember );
$aTopic->showHeader();
$aTopic->save();



?>