<?php

class Topic {

  public $subject;

  public function __construct($subject,$member) {
    echo "Hello " . $member->username . '<br/>';
    echo "Profession is " . $subject . '<br/>';
  }

}
?>