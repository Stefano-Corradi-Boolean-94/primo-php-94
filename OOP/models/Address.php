<?php


class Address{
  public $street;
  public $city;
  public $zipcode;

  function __construct($_street, $_city, $_zipcode){
    $this->street = $_street;
    $this->city = $_city;
    $this->zipcode = $_zipcode;
  }

}