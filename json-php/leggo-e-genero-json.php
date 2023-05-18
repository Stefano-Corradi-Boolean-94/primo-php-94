<?php

/*
1. leggo il file json
2. trasformo la stringa json in array di array
3. aggiungo uno studente all'array
4. trasformo l'array php in json
5. lo salvo

*/

// 1.
$json_string = file_get_contents('students.json');

// 2. 
$students = json_decode($json_string, true);

// 3. 
$new_student = [
  'name' => 'Ugo',
  'last_name' => 'De Ughi'
];
$students[] = $new_student;

// 4.
$new_json = json_encode($students);

// 5. 
file_put_contents('students.json',$new_json);


// reindirizzo al file di lettura
header('Location: ./lettura-json.php');



