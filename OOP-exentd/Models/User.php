<?php

require_once __DIR__ . '/../Traits/Address.php';

class User {

  use Address;

  public $name;
  public $email;
  private $age;
  public $discount = 0;

  public function __construct($_name, $_email, $_age){
    $this->name = $_name;
    $this->email = $_email;
    $this->age = $_age;
    $this->setDiscount($_age);
  }

  protected function setDiscount($_age) {
     if($_age > 65) {
        $this->discount = 15;
     }
  }

  public function setAge($_age){
    // qui posso controllare se è un numero
     $this->age = $_age;
  }

  public function getAge(){
    return $this->age;
  }


  public function getDiscount() {
     return $this->discount;
  }
}