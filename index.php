<?php

//l'inizializzazione dell'oggetto user è nel file user.php
require_once 'user.php';

//id da autoincrementare ad ogni nuova istanza
$tmp_User_id = -1;
$tmp_Payment_id = -1;

//USER1
$user0 = new User(++$tmp_User_id, 'Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21');
//stampa le informazioni dell'utente(istanza)
echo '<h1>USER ID: 0</h1>';
$user0->printInfo($user0);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user0_data = $user0->getInfo($user0);
var_dump($user0_data);
//USER2
$user1 = new User(++$tmp_User_id, 'Anna', 'Verdi', 'anna.verdi@libero.it', '2002-11-01');
//stampa le informazioni dell'utente(istanza)
echo '<h1>USER ID: 1</h1>';
$user1->printInfo($user1);
//salva le informazioni dell'utente(istanza) in un'array associativo
$user1_data = $user1->getInfo($user1);
var_dump($user1_data);

//passo l'id dell'utente alla sottoclasse pagamento(pagamenti utente_id=0)
$payment0 = new SubscriptionPayment(0, 'Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21',++$tmp_Payment_id,'Paypal','2001-02-22 19:08:56');
$payment0->setNote('Qualche problema con il pagamento');
$payment1 = new SubscriptionPayment(0, 'Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21',++$tmp_Payment_id,'Bank Transfer','2001-09-12 06:08:56');
$payment2 = new SubscriptionPayment(1, 'Anna', 'Verdi', 'anna.verdi@libero.it', '2002-11-01', ++$tmp_Payment_id, 'Bank Transfer', '2002-08-08 10:08:56');
//stampo le informazioni dei pagamenti
echo '<h1>PAYMENT ID: 0</h1>';
$payment0->printInfo($payment0);
echo '<h1>PAYMENT ID: 1</h1>';
$payment1->printInfo($payment1);
echo '<h1>PAYMENT ID: 2</h1>';
$payment2->printInfo($payment2);
