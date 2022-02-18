<?php

include_once './classes/Produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->Codigo = 010;
$produto2->Codigo = 012;

$produto1->Descricao = "cd metallica";
$produto2->Descricao = "bala juquinha";

$produto1->Preco = "R$ 150,00";
$produto2->Preco = "R$ 1,50";

$produto1->Quantidade = 60;
$produto2->Quantidade = 100;

$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();