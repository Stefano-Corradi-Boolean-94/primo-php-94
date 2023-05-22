<?php

require_once __DIR__ . '/models/User.php';

// istanzio un utente User
$ugo = new User("Ugo","De Ughi",20, new Address('Via dei Platani 10', 'Milano', '20100'), new Role('CEO',1));
// scrivo una variabile di istanza
// in questo caso non li scrivo perché sono stati già impostati dal costruttore
// $ugo->name = "Ugo";
// $ugo->lastname = "De Ughi";
// $ugo->age = 20;

$filippo = new User("Filippo","De Filippi",80, new Address('Via dei fiori 1','Bologna', '40100'));
// $filippo->name = "Filippo";
// $filippo->lastname = "De Filippi";
// $filippo->age = 80;

var_dump($ugo);
var_dump($filippo);
// leggo una variabile di istanza
var_dump($ugo->name);
var_dump($filippo->name);

// invoco un metodo dell'istanza
var_dump($ugo->getFullName());
var_dump($filippo->getFullName());


var_dump($ugo->getStringDiscount());
var_dump($filippo->getStringDiscount());

var_dump($ugo->getFullAddress());
var_dump($filippo->getFullAddress());

var_dump($ugo->getFullInfo());
var_dump($filippo->getFullInfo());

// nullsafe operator -> ? restituisce null se l'oggetto è null e non restituisce un errore se risrichiama la proprità di un oggetto null
var_dump($ugo->role?->name);
var_dump($filippo->role?->name);

// accedo a una proiprità statica
var_dump(User::$species);
// accedo a un medodo di istanza che a sua volta accede a una proprietà statica
var_dump($ugo->getSpecies());

// accedo a un metodo statico il quale accede a una propità statica, con paramentro
echo User::getTagSpecies('h1');
echo User::getTagSpecies('h2');