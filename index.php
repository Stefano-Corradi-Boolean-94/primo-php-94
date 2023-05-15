<?php

// questo è un commento

/*
commento su più righe
*/

# commento stile Perl

$nome = "Ugo";
$cognome = 'de Ughi';

// concateno stringhe col punto
$nome_cognome = $nome . ' ' . $cognome;

//concateno tipo template literal utilizzando gli apici doppi
$saluto_nome_cognome = "Ciao $nome $cognome!";

$anni = 30;

$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit quasi quaerat nam natus dolor maxime saepe dolorum magnam officiis laborum quae reprehenderit, voluptates cumque deleniti fugit libero nostrum illum!';

// explode trasforma un testo in array passando un separatore (equivalente di split)
// explode(separatore, stringa)
$testo_esploso = explode(' ', $testo);

var_dump($testo_esploso);

// str_replace(porzioneDaModificare, conCosa, stringa);

$testo_corretto = str_replace('dolorum','XXXX',$testo);

// equivalente di includes
var_dump(str_contains($testo_corretto, 'XXXX'));

// solo pa prima lettera diveta maiuscola
$testo_ucfirst= ucfirst($testo);

// come capitalize
$testo_ucwords = ucwords($testo);



// per stampare una variabile
//echo $nome;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>primo php</title>
</head>
<body>
  <h1>Primo php</h1>
  <!-- tutte le volte che dobbiamo stampare php bisogna aprire e chiudere i tag php e chiamare la var con echo  -->
  <h2>Ciao <?php echo $nome ?> <?php echo $cognome ?></h2>
  <!-- strlen conta i caratteri di una stirnga  -->
  <h3>Il nome è lungo <?php echo strlen($nome)  ?> caratteri</h3>
  <h2>Ciao <?php echo $nome . ' ' . $cognome ?> </h2>
  <h2><?php echo "Ciao $nome $cognome!" ?> </h2>
  <h2>Ciao <?php echo $nome_cognome ?> </h2>
  <h2><?php echo $saluto_nome_cognome ?>! Oggi compi <?php echo $anni ?> anni </h2>
  <h2>Testo originale</h2>
  <p><?php echo $testo ?></p>
  <h2>Testo corretto</h2>
  <p><?php echo $testo_corretto ?></p>
  <h2>Testo testo_ucfirst</h2>
  <p><?php echo $testo_ucfirst ?></p>
  <h2>Testo testo_ucwords</h2>
  <p><?php echo $testo_ucwords  ?></p>
  
</body>
</html>