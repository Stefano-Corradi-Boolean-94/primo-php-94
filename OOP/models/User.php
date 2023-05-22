<?php

require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/Role.php';


class User {
  public $name;
  public $lastname;
  public $age;
  // proprità con valore dei default
  public $discount = 0;
  public $address;
  public $role;
  public static $species = "Homo Sapiens";

  // col costruttore valorizzo le proprità obbligatiore per una classe
  // __construct è una parola chiave e viene invocata nel momento in cui si crea un'istanza
  //                                              Tipo      valore
  function __construct($_name, $_lastname, $_age, Address $_address, Role $_role = null){
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->age = $_age;
    $this->address = $_address;
    $this->role = $_role;
    // nel costruttore posso gestire logiche interne alla classe richiamando metodi interni
    $this->setDiscount();
  }

  // i setter possono non avere il return
  public function setDiscount(){
    if($this->age > 65) $this->discount = 40;
  }

  // i getter devono avere un return
  public function getFullName(){
    return $this->name . ' ' . $this->lastname;
  }

  public function getStringDiscount(){
    return $this->discount . '%';
  }

  public function getFullAddress(){
    return $this->address->street . ' - ' . $this->address->zipcode . ' - ' . $this->address->city;
  }

  public function getFullInfo(){
    return 'Nome: ' . $this->getFullName() . ' Età: ' . $this->age . ' anni Indirizzo: ' . $this->getFullAddress();
  }

  // accedo a una proprità statica
  public function getSpecies(){
    return self::$species;
  }

  public static function getTagSpecies($tag){
    return "<$tag>" . self::$species . "</$tag>";
  }

}