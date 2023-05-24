<?php


trait Address{
  public $street;
  public $city;
  public $zipcode;

  public function getFullAddress(){
    return $this->street . ' - ' . $this->city . ' - ' . $this->zipcode;
  }
}