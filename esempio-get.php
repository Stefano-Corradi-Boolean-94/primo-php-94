<?php

$name = $_GET['name'];
$cognome = $_GET['cognome'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esempio GET</title>
</head>
<body>

<h1>Esempio GET</h1>
<h2>Ciao <?php echo $name ?> <?php echo $cognome ?></h2>
  
</body>
</html>