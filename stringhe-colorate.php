<?php

$printForm = true;

// se ho inviato il form $_POST['parola'] è stato settato 
// controllo anche se $_POST['parola'] contiene una stringa
// se sono true entrambe le condizioni stampo il risultatao altrimenti stampo il form
if(isset($_POST['parola']) && !empty($_POST['parola'])  ){
  $printForm = false;
  $parola = $_POST['parola'];

  // se la parola inviata è = 'Boolean' valorizzo la classe verde altrimenti rosso
  $classCSS = ($parola === 'Boolean') ? 'text-success' : 'text-danger';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Stringhe colorate</title>
</head>
<body>

  <div class="container my-5">

  <!-- il form viene stampato al primo caricamento  -->
  <?php if($printForm){ ?>
    <form action="stringhe-colorate.php" method="POST">
      
      <div class="mb-3">
        <label for="parola" class="form-label">Nome</label>
        <input type="text" class="form-control" id="parola" name="parola" aria-describedby="emailHelp" placeholder="Parola">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php } else { ?>
      <!-- questo output viene stampato dopo l'0ivio del form  -->
      <!-- stampo dinamicamente sial ti leto che il CSS  -->
      <h1 class="<?php echo $classCSS ?>"><?php echo $parola ?></h1>
    <?php }  ?>

  </div>
  
</body>
</html>