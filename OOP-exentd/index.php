<?php



require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Empplyee.php';


 $giuseppe = new User('Giuseppe', 'giuseppe@verdi.com', 80);
 $giuseppe->street =  'Via dei Platani 1';
 $giuseppe->city =  'Milano';
 $giuseppe->zipcode =  '20100';
 //$giuseppe->age = 'ciao';
 var_dump($giuseppe->getFullAddress());

 $martina = new User('Martina', 'martina@verdi.com', 40);

 
 $mario = new Empplyee('Mario','mario@rossi.com',75,1);
 $pino = new Empplyee('Pino','pino@rossi.com',35,2);


 var_dump('USER');
 var_dump($giuseppe);
 var_dump($martina);
 
 var_dump('EMPPLOYEE');
 var_dump($mario);
 var_dump($pino);

//  $users = [
//   new User('Giuseppe', 'giuseppe@verdi.com'),
//   new Empplyee('Mario','mario@rossi.com',1),
//  ];

//  var_dump($users);
//  var_dump($users[0]);
//  var_dump($users[0]->getDiscount());
//  var_dump($users[1]->getDiscount());
