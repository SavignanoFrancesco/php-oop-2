<?php

//l'inizializzazione dell'oggetto user è nel file user.php
require_once 'user.php';

//creo una nuova istanza della classe User
$user1 = new User('Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21');

$user1->printInfo($user1);

$user1_data = $user1->getInfo($user1);
var_dump($user1_data);
