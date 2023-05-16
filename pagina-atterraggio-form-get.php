<?php

//var_dump($_GET);

// verifico se esiste $_GET['name'], in alternativa stampo 'manca il nome'
$name = $_GET['name'] ?? 'manca il nome';
$lastname = $_GET['lastname'] ?? 'manca il cognome';
// lo stesso controllo con operatore ternario
$email = isset($_GET['email']) ? $_GET['email'] : 'manca la mail';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina atterraggio form</title>
</head>
<body>

  <h1>Utente:</h1>
  <ul>
    <li>Nome: <?php echo $name ?></li>
    <li>Cognome: <?php echo $lastname ?></li>
    <li>Email: <?php echo $email ?></li>
  </ul>
  
</body>
</html>