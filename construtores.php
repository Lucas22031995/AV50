<?php

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$lucas = new Pessoa;

$lucas->Codigo       = 01;
$lucas->Nome         = "lucas";
$lucas->Altura       = 1.70;
$lucas->Idade        = 26;
$lucas->Nascimento   = "22/03/1995";
$lucas->Escolaridade = "Ensino Médio Completo";

$lucas->Salario = 1200.00;

echo "manipulando o objeto {$lucas->Nome}<br><br>";

echo "{$lucas->Nome} é formado em {$lucas->Escolaridade}<br>";
echo "{$lucas->Nome} possui {$lucas->Idade}<br>";
$lucas->Envelhecer(60); 

$conta_lucas = new Conta(6678,"CC.1234.56","17/08/2008",$lucas,1234,1540.00,false);

echo "Manipulando a conta de {$lucas->Nome}:<br><br>";

echo "O saldo atual é R/$ {$conta_lucas->ObterSaldo()}<br>";
$conta_lucas->Depositar(100);
echo "O saldo atual é R/$ {$conta_lucas->ObterSaldo()}<br>";
$conta_lucas->Retirar(58);
echo "O saldo atual é R/$ {$conta_lucas->ObterSaldo()}<br>";