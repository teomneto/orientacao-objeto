<?php
class Cliente
{
public $nome;
public $codigo;
}

$x = new Cliente();
$x->nome = Joao;
$x->codigo = 2233;

$y = new Cliente();
$y->nome = Joana;
$y->codigo = 3344;

echo "Nome : $x->nome" . PHP_EOL;
echo "Codigo : $x->codigo" . PHP_EOL;

echo "Nome : $y->nome" . PHP_EOL;
echo "Codigo : $y->codigo" . PHP_EOL;
