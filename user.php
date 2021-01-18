<?php
//inizializzazione oggetto
class User{
    //variabili necessarie alla creazione della istanza
    public $User_id;
    public $name;
    public $lastname;
    public $email;
    public $date_of_birth;

    //costruttore con le variabili necessarie alla creazione dell'istanza
    public function __construct($_User_id, $_name, $_lastname, $_email, $_date_of_birth){

        //User_id autoincrementato
        $this->User_id = $_User_id;

        //se il nome o cognome contiene caratteri diversi da lettere lanca un errore
        if(!preg_match("/^[a-zA-Z]+$/", $_name) || !preg_match("/^[a-zA-Z]+$/", $_lastname)) {
            throw new Exception($_name.": Deve contenere lettere dalla a alla z!");
        }else{
            $this->name = $_name;
            $this->lastname = $_lastname;
        }

        //valUser_idazione email
        if(!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$_email)){
            throw new Exception($email.": InvalUser_id email!");
            //die ("InvalUser_id Email-ID");
        }else{
            $this->email = $_email;
        }

        //valUser_idazione data di nascita
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



    // public function setPremium(){
    //     $this->premium = 1;
    // }
}

//sotto classe di User con vantaggi premium account
class SubscriptionPayment extends User {

    public $User_id;
    public $name;
    public $lastname;
    public $email;
    public $date_of_birth;
    public $Payment_id;
    public $payment_method;
    public $payment_made;
    public $note;

    public function __construct($_User_id, $_name, $_lastname, $_email, $_date_of_birth, $_Payment_id, $_payment_method, $_payment_made){
        parent::__construct($_User_id, $_name, $_lastname, $_email, $_date_of_birth, $_Payment_id, $_payment_method, $_payment_made);

        $this->Payment_id = $_Payment_id;
        $this->payment_method = $_payment_method;
        $this->payment_made = $_payment_made;

    }

    public function setNote($text){
        $this->note = $text;
    }



}
?>
