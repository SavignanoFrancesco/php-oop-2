<?php

//l'inizializzazione dell'oggetto user è nel file user.php
require_once 'user.php';

//id da autoincrementare ad ogni nuova istanza
$tmp_id = -1;

//___________USER1___________
//creo una nuova istanza della classe User
$user1 = new User(++$tmp_id, 'Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21', 'CI', 0);
$user1->setPremium();
if($user1->premium > 0){
    $user1 = new PremiumUser($tmp_id, 'Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21', 'CI', 1);
}
//stampa le informazioni dell'utente(istanza)
$user1->printInfo($user1);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user1_data = $user1->getInfo($user1);
var_dump($user1_data);

//___________USER2___________
//creo una nuova istanza della classe User
$user2 = new User(++$tmp_id, 'Marco', 'Rossi', 'marco.rossi@gmail.it', '1990-11-01', 'Driving License', 0);
if($user2->premium > 0){
    $user2 = new PremiumUser($tmp_id, 'Marco', 'Rossi', 'marco.rossi@gmail.it', '1990-11-01', 'Driving License', 1);
}
//funzione per aggiungere testo a note
$user2->setNote('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
//stampa le informazioni dell'utente(istanza)
$user2->printInfo($user2);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user2_data = $user2->getInfo($user2);
var_dump($user2_data);

//___________USER3___________
//creo una nuova istanza della classe User
$user3 = new User(++$tmp_id, 'Anna', 'Verdi', 'anna.verdi@libero.it', '2002-03-13', 'CI', 0);
$user3->setPremium();
if($user3->premium > 0){
    $user3 = new PremiumUser($tmp_id, 'Anna', 'Verdi', 'anna.verdi@libero.it', '2002-03-13', 'CI', 1);
}
//stampa le informazioni dell'utente(istanza)
$user3->printInfo($user3);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user3_data = $user3->getInfo($user3);
var_dump($user3_data);
