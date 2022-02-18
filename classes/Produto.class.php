<?php

class Produto{

    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

    function ImprimeEtiqueta(){
        echo "Dados do produto<br><br>";
        echo "O CODIGO É: {$this->Codigo} <br>";
        echo "DESCRIÇÃO DO PRODUTO: {$this->Descricao}<br>";
        echo "preço do produto: {$this->Preco}<br>";
        echo "quantidade:{$this->Quantidade}<br>";
        echo "<hr>";

    }











}