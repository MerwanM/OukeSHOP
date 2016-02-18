<?php

class Controleur {

    public function modele($modele, $params) {
        require_once "/../php/modele/" .$modele.".php";
        return new $modele($params);
    }

    public function vue($vue, $date = []){
        require "/../php/vue/".$vue.".php";
    }
}