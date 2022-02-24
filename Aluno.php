<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matricula;
    private $curso;
    //Métodos
    public function pagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno $this->name</p>";
    }
    //Métodos Especiais
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }


}
