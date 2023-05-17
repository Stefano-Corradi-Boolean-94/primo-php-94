<?php

session_start();

//svuoto la sessione
session_unset();

// distruggo la sessione
session_destroy();

// una volta ditrutta la sessione reindirizzo
header('Location: ./pagina-due.php');