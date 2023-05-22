<?php

require_once __DIR__ . '/models/User.php';

// array di oggetti
$users = [
  new User("Ugo","De Ughi",20, new Address('Via dei Platani 10', 'Milano', '20100'), new Role('CEO',1)),
  new User("Filippo","De Filippi",40, new Address('Via dei fiori 1','Bologna', '40100')),
  new User("Giuseppe","Verdi",80, new Address('Via dei tulipani','Milano', '20100'), new Role('CTO', 2)),
];

//var_dump($users);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Users OOP</title>
</head>
<body>

  <div class="container my-5">
    <h1 class="mb-3">Lista utenti</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Inirizzo</th>
      <th scope="col">Ruolo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
      <tr>
        <th scope="row"><?php echo $user->getFullName() ?></th>
        <td><?php echo $user->getFullAddress() ?></td>
        <td><?php echo $user->role?->name ?? '-' ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


  </div>
  
</body>
</html>