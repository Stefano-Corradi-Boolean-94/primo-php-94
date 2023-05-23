<?php

require_once __DIR__ . '/User.php';

class Empplyee extends User{
  public $level;

  public function __construct($_name, $_email, $_age, $_level){
    //devo ereditare il costruttore della classe genitore passandogli i parametri richiesti
    parent::__construct($_name, $_email,  $_age);
    $this->level = $_level;
    $this->setDiscount($_age);
  }

  // polimorfimo. possiamo avere un metodo con lo stesso nome del genitore ma con funzionalità diverse
  protected function setDiscount($_age) {
    if($_age > 65) {
       $this->discount = 40;
    }else{
      $this->discount = $this->level * 10;
    }
 }

  public function getLevel(){
    echo $this->level;
  }
}