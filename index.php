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

$testoA = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias, maiores repellendus provident, ducimus officiis modi eos aliquid culpa similique quas pariatur harum molestias, fugiat laudantium sit. Totam, cupiditate est?';

$testoA .= ' - Questo lo ho concatenato al testoA';


// ARRAY /////////////////////////
$colori = ['giallo','rosso', 'blu'];
// equivalente di includes
if(in_array('verde',$colori)){
  var_dump('verde esiste');
}else{
  var_dump('verde NON esiste');
}
if(array_search('verde',$colori)){
  var_dump('verde esiste ed è a chiave ' . array_search('verde',$colori));
}else{
  var_dump('verde NON esiste');
}

// 'pusho un nuovo colore'
$colori[] = 'verde';
if(in_array('verde',$colori)){
  var_dump('verde esiste');
}else{
  var_dump('verde NON esiste');
}
// se trovo l'occerrenza ottengo l'indice dell'elemento
if(array_search('verde',$colori)){
  var_dump('verde esiste ed è a chiave ' . array_search('verde',$colori));
}else{
  var_dump('verde NON esiste');
}
var_dump($colori); 
var_dump($colori[1]); 

$user = [
  'name' => 'Ugo',
  'lastname' => 'De Ughi',
];
// verifico l'esistena della chiave 'age'
if(array_key_exists('age',$user)){
  var_dump('age esiste');
}else{
  var_dump('age NON esiste');
}
// pusho l'età
$user['age'] = 30;
if(array_key_exists('age',$user)){
  var_dump('age esiste');
}else{
  var_dump('age NON esiste');
}
echo '-----------------------------------------------<br>';
var_dump($user); 
//var_dump($user[0]); // errore, non esiste
var_dump($user['name']); 
var_dump($user['lastname']); 
// metto in una array tutte le chiavi
var_dump(array_keys($user));

// array di array (equivalente all'array di oggetti)
$team = [
  [
    'name' => 'Ugo',
    'lastname' => 'De Ughi',
  ],
  [
    'name' => 'Giuseppe',
    'lastname' => 'Verdi',
  ],
  [
    'name' => 'Martina',
    'lastname' => 'Bianchi',
  ]
];
var_dump($team); 
var_dump($team[1]['lastname']); // verdi

$team2 = [
  'programmatore' => [
    'name' => 'Ugo',
    'lastname' => 'De Ughi',
  ],
  'pubblicitario' => [
    'name' => 'Giuseppe',
    'lastname' => 'Verdi',
  ],
  'CEO' => [
    'name' => 'Martina',
    'lastname' => 'Bianchi',
    ]
  ];
var_dump($team2['CEO']);


// per stampare una variabile
//echo $nome;


// CICLI /////////////////////////////////////
echo '---------------CICLI--------------------------------<br>';
for($i = 0; $i < 10; $i++){
  echo "$i <br>";
}

echo "<hr>";
// il primo parametro è l'array as elemento ciclato
foreach($colori as $colore){
  echo "$colore <br>";
}

echo "<hr>";

foreach($user as $valore){
  echo "Valore: $valore <br>";
}
echo "<hr>";

foreach($user as $chiave => $valore){
  echo "Chiave: $chiave - Valore: $valore <br>";
}
echo "<hr>";

$animals = [
  "mammals" => ["cow", "pig", "horse", "dog"],
  "birds" => ["duck", "chicken"]
];


foreach ($animals as $specie => $animalClass) {
  echo "<h3>$specie</h3>";
 foreach($animalClass as $indice =>  $animal) {
     echo $indice . ' ' .$animal . '<br>';
 }
}

// FUNZIONI /////////////////////////////////////

function stampaSalutoConEcho(){
  echo 'Ciao con echo';
}
function stampaSalutoDinamico($saluto){
  echo 'Ecco il mio saluto: ' . $saluto;
}
function stampaSalutoSenzaEcho(){
  return 'Ciao senza echo';
}
function printUtente($utente){
  echo $utente['name'] . ' ' . $utente['lastname'];
}

$name = 'Ugo';
function stampaNome(){
  //echo $name; // ottengo un errore perché le funzioni non vedono le variabili esterne
}


// INCLUDE /////////////////////////////////////
echo '---------------INCLUDE--------------------------------<br>';
include './vars.php';
var_dump($colore_preferito, $numero_preferito);


?>

<!DOCTYPE html>
<html lang="en">
<?php

require_once __DIR__ . '/partials/head.php';

?>
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
  <hr>
  <p>
    <?php echo $testoA ?>
  </p>

  <hr>
  
  <ul>
    <?php foreach($colori as $colore){ ?>
      <li><?php echo $colore ?></li>
    <?php } ?>
  </ul>

  <ul>
    <?php foreach($colori as $colore): ?>
      <li><?php echo $colore ?></li>
    <?php endforeach; ?>
  </ul>

  <hr>

  <h3><?php stampaSalutoConEcho() ?></h3>
  <h3><?php echo stampaSalutoSenzaEcho() ?></h3>
  <h3><?php printUtente($user)?></h3>
  <h3><?php stampaSalutoDinamico('Ciao!')?></h3>
  
</body>
</html>