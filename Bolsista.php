<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;
    //Métodos
    public function renovarBolsa() {
        echo'<p>Bolsa renovada</p>';
    }
    public function pagarMensalidade() {
        echo"<p>$this->name é bolsista. Então pega com desconto!</p>";
    }
    //Métodos Especiais
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }


}
