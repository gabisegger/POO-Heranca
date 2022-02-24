<?php

abstract class Pessoa {
    //Atributos
    protected $name;
    protected $age;
    protected $genere;
    //Métodos
    public final function fazerAniver() {
        $this->age ++;
    }
    //Métodos Especiais
    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function getGenere() {
        return $this->genere;
    }

    function setName($name){
        $this->name = $name;
    }

    function setAge($age){
        $this->age = $age;
    }

    function setGenere($genere){
        $this->genere = $genere;
    }


}
