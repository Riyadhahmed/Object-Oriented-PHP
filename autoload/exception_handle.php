<?php

/* 

class auto loading using anonymous function

*/

spl_autoload_register(function ($className){
    if (file_exists("classes/$className.php")) { 
         require_once "classes/$className.php"; 
     } 
     else{
        throw new Exception("Unable to load $className Class.");
   }
});

try {
   new Member;
   echo "<br>";
   new NotExist;
} catch (Exception $e) {
   echo $e->getMessage(), "\n";
}