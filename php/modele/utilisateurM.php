<?php

class UtilisateurM {

    protected $password;

    function __construct($params) // params = adresse e-mail
    {

        if(!empty($params)){
            $mail = $params[0];
            $req = Bdd::getInstance()->prepare("SELECT * FROM CLIENT WHERE EMAIL=:email");
            if(!$req->execute([':email' => $mail]))
                throw new Exception("Impossible de récupérer l'utilisateur");
            if(!$rep = $req->fetch())
                throw new Exception("Utilisateur introuvable");
            $this->idclient = $rep['ID'];
            $this->email = $mail;
            $this->password = $rep['MDP'];
            $this->nom = $rep['NOM'];
            $this->prenom = $rep['PRENOM'];
            $this->dateInscription = $rep['DATE_INSCRIPTION'];
            $this->adrese = $rep['ADRESSE_FACTURATION'];
        }
    }

    static function create ($email, $password, $nom, $prenom, $adresse_facturation)
    {
        $req = Bdd::getInstance()->prepare('INSERT INTO `CLIENT`(`EMAIL`, `MDP`, `NOM`, `PRENOM`, `DATE_INSCRIPTION` , `ADRESSE_FACTURATION`) VALUES ( :email, :password, :nom, prenom, NOW(), :adresse_facturation)');
        if (!$req->execute([':email' => $email,
                        ':password' => $password,
                        ':nom' => $nom,
                        ':prenom' => $prenom,
                        ':adresse_facturation' => $adresse_facturation]))
            throw new Exception("Création impossible de l'utilisateur");
    }

    public function confirm()
    {
        $req = Bdd::getInstance()->prepare('UPDATE CLIENT SET CONFIRM=1 WHERE EMAIL:email');
        if($req->execute([':email'=> $this->email]))
            throw new Exception("Mise à jour de l'utilisateur impossible");
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setEmaill($email)
    {
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function update(){
        $req = Bdd::getInstance()->prepare('UPDATE CLIENT SET MDP=:mdp, NOM=:nom, PRENOM=:prenom WHERE EMAIL=:mail');
        if(!$req->execute([':mdp' => $this->password,
                            ':nom' => $this->nom,
                            ':prenom' => $this->prenom,
                            ':mail' => $this->email]))
        throw new Exception("Mise à jour de l'utilisateur impossible");
    }
}