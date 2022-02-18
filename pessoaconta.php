<?php

include_once './classes/Pessoa.class.php';
include_once './classes/Conta.class.php';

$lucas = new Pessoa;
 
$lucas->Codigo       = 01;
$lucas->Nome         = "lucas";
$lucas->Altura       = 1.70;
$lucas->Idade        = 26;
$lucas->Nascimento   = "22/03/1995";
$lucas->Escolaridade = "Ensino Médio Completo";



echo "Manipulando o objeto {$lucas->Nome}: <br><br>";

echo "{$lucas->Nome} é formado em: {$lucas->Escolaridade}<br>";
 
echo "{$lucas->Nome} nasceu em:{$lucas->Nascimento}<br>";


echo "{$lucas->Nome} possui {$lucas->Idade} anos<br>";


$conta_lucas = new Conta(123,"lucas",1.70,26,"22/03/1995","ensino superior completo",1200,false);

echo "Manipulando a conta de {$lucas->Nome}: <br><br>";
echo "O saldo atual é r/$ {$conta_lucas->ObterSaldo()}<br>";






