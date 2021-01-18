<?php

//inizializzazione oggetto
class User{
    //variabili necessarie alla creazione della istanza
    public $name;
    public $lastname;
    public $email;
    public $date_of_birth;

    //costruttore con le variabili necessarie alla creazione dell'istanza
    function __construct($_name, $_lastname, $_email, $_date_of_birth){

        //se il nome o cognome contiene caratteri diversi da lettere lanca un errore
        if(!preg_match("/^[a-zA-Z]+$/", $_name) || !preg_match("/^[a-zA-Z]+$/", $_lastname)) {
            throw new Exception($_name.": Deve contenere lettere dalla a alla z!");
        }else{
            $this->name = $_name;
            $this->lastname = $_lastname;
        }

        //validazione email
        if(!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$_email)){
            throw new Exception($email.": Invalid email!");
            //die ("Invalid Email-ID");
        }else{
            $this->email = $_email;
        }

        //validazione data di nascita
        if (DateTime::createFromFormat('Y-m-d', $_date_of_birth) === FALSE) {
            throw new Exception($date_of_birth.": Formato data deve essere yyyy-mm-dd!");
        }else{
            $this->date_of_birth = $_date_of_birth;
        }
    }

    //metodo per stampare le informazioni dell'oggetto User
    public function printInfo($user){

        //converto l'oggetto in un array associativo
        $user_data = (array)$user;
        // var_dump($user_data);

        //stampa dell'array associativo tramite ciclo foreach
        echo '<h1>'. $user_data['name'].' '.$user_data['lastname'].'</h1>';
        foreach ($user_data as $user_data_key => $user_data_value) {
            echo '<p>'.$user_data_key.': '.$user_data_value.'<p>';
        }

    }

    //metodo per ricavare le informazioni dell'oggetto User
    public function getInfo($user){

        //converto l'oggetto in un array associativo
        $user_data = (array)$user;

        return $user_data;

    }
}

//creo una nuova istanza della classe User
$user1 = new User('Francesco', 'Savignano', 'francesco.savignano@gmail.com', '1996-04-21');

$user1->printInfo($user1);

$user1_data = $user1->getInfo($user1);
var_dump($user1_data);
