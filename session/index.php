<?php

// apro la sessione
session_start();

$colre_preferito = 'giallo';

$_SESSION['colorepreferito'] = $colre_preferito;

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  <h1>Session</h1>
  <a href="./pagina-due.php">vai a pagina 2</a>

  
</body>
</html>