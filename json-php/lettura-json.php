<?php

	
$json_string = file_get_contents('students.json');

// ricodifica il json in array di array (passando true come secondo parametro)
$students = json_decode($json_string, true);

var_dump($students);
