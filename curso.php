<?php
class Curso

{
public $nome;
public $sala;
}

$curso = new Curso();
$curso->nome = "Algoritimos em Java";
$curso->sala = "B05";

echo "Nome do curso: $curso->nome" . PHP_EOL;
echo "Sala : $curso->sala" . PHP_EOL;
