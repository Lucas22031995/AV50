<?php

class Pessoa{

    public  $Codigo;
    public  $Nome;
    public  $Altura;
    public  $Idade;
    public  $Nascimento;
    public  $Escolaridade;
    public  $Salario;

function Crescer($centimentro){
    if($centimetros>0):
        $this->Altura += $centimetros;
    endif;

}
function Escolaridade($titulacao){
    $this->Escolaridade=$titulacao;
}

function Envelhecer($anos){
    if ($anos>0):
        $this->Idade+=$anos;
    endif;

}




}