<?php

session_start();

if(isset($_SESSION['colorepreferito'])){
 // var_dump('variabile presente in sessione');
}else{
  //var_dump('variabile NON presente in sessione');
}

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
  <h1>Session pagina 2</h1>

  <?php if(isset($_SESSION['colorepreferito'])): ?>
    <h3>Il colore preferito è <?php echo $_SESSION['colorepreferito']  ?> </h3>
  <?php else: ?>
    <h3>Non ci sono colori in sessione</h3>
  <?php endif; ?>
  
  <a href="./index.php">torna a index</a> <br>
  <a href="./fine-sessione.php">chiudi la sessione</a>
  
</body>
</html>