<?php

class utilisateur extends Controleur {

    public function connect($params = null){

        $client = $this->modele('utilisateurM',[$_POST['mail']]);
        $password = htmlspecialchars($password,$client->getPassword()) && $this->checkCaptcha($params)){

        }
    }
}
?>