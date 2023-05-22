<?php

class Role{
  public $name;
  public $level;

  function __construct($_name, $level){
    $this->name = $_name;
    $this->level = $level;
  }

}