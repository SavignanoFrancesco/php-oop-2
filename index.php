<?php

//l'inizializzazione dell'oggetto user è nel file user.php
require_once 'user.php';

//id da autoincrementare ad ogni nuova istanza
$tmp_id = -1;

//creo una nuova istanza della classe User
$user1 = new User(++$tmp_id, 'Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21');
//stampa le informazioni dell'utente(istanza)
$user1->printInfo($user1);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user1_data = $user1->getInfo($user1);
var_dump($user1_data);

//creo una nuova istanza della classe User
$user2 = new User(++$tmp_id, 'Marco', 'Rossi', 'marco.rossi@gmail.it', '1990-11-01');
//stampa le informazioni dell'utente(istanza)
$user2->printInfo($user2);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user2_data = $user2->getInfo($user2);
var_dump($user2_data);

//creo una nuova istanza della classe User
$user3 = new User(++$tmp_id, 'Anna', 'Verdi', 'anna.verdi@libero.it', '1990-11-01');
//stampa le informazioni dell'utente(istanza)
$user3->printInfo($user3);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user3_data = $user3->getInfo($user3);
var_dump($user3_data);
