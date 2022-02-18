<?php

class Conta{

public $Agencia;
public $Codigo;
public $DataDeCriacao;
public $Titular;
public $Senha;
public $Saldo;
public $Cancelada;


function Sacar($quantia){
    if($quantia>0):
        $this->Saldo-=$quantia;
    endif;
}
function ObterSaldo(){
    return $this->Saldo;
}
function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,$Cancelada){

    $this->Agencia=$Agencia;
    $this->Codigo=$Codigo;
    $this->DataDeCriacao=$DataDeCriacao;
    $this->Titular=$Titular;
    $this->Senha=$Senha;
    


    $this->Depositar($Saldo);
    $this->Cancelada = false;
}

function __destruct(){

    echo "objeto {$this->nome} finalizado...<br>";

}







}