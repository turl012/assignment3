<?php
	// This is the file for the parent class

  class ParentClass {
    private $n;
    private $j;
    private $p;
    
    public function __construct($n, $j, $p) {
      $this->name = $n;
      $this->job  = $j;
      $this->pet  = $p;
    }
    
    public function getName() {
      return $this->name;
    }
    
    public function getJob() {
      return $this->job;
    }
    
    public function getPet() {
      return $this->pet;
    }
    
    public function __toString() {
      $who = "Hi, my name is " . $this->getName();
      $what = "and I work in a " . $this->getJob();
      $life = "I have a wife and a " . $this->getPet() . " and a family";
      $task = "one day my boss came up to me and said \"Hey " . $this->getName() . " are you busy\" I said \"no\"";
      return $who . "<br>" . $what . "<br>" . $life . "<br>" . $task . "<br>";
    }
    
    
  }
