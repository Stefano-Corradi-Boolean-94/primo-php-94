<?php

$students = [
  [
      'name' => 'Mario',
      'last_name' => 'Rossi'
  ],
  [
      'name' => 'Giovanna',
      'last_name' => 'Bianchi'
  ],
  [
      'name' => 'Giuseppe',
      'last_name' => 'Verdi'
  ],

];

$json_string = json_encode($students);

// se il file è presente viene svrascritto, altrimenti viene generato
file_put_contents('students.json', $json_string);

