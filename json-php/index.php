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

];

// con questa istruzione via HTTP viene visto il file come un file con estensione .json
header('Content-Type: application/json');

// stampo il json
echo json_encode($students);
