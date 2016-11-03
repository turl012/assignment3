<?php
  // this file will extend ParentClass.php

  class ChildClass extends ParentClass {

    private $s;

    public function __construct($n, $j, $p, $s){
      parent::__construct($n, $j, $p);
      $this->status = $s;
    }

    public function getStatus() {
      return $this->status;
    }

    public function setStatus($newS) {
      $this->status = $newS;
    }

    public function __toString() {
      $parentString = parent::__toString();
      $task = "One day my boss came up to me and said \"Hey " . $this->getName() . " are you busy\" I said \"" . $this->getStatus() . "\"";
      return $parentString . "<br>" . $task . "<br>";
    }
  }
