<?php


require 'lib/Carbon.php';
require 'CartaoDeCredito.php';// por que minha classe esta em outro arquivo

use Carbon\Carbon;

$cartao = new CartaoDeCredito();
$cartao->numero = 55555;
$catao->DataDeValidade =
  Carbon::createFromDate(2022, 3 ,7 ,
  'America/Sao_Paulo');

  echo "Numero $cartao->numero " . PHP_EOL;
  echo "Validade: {$cartao->dataDeValidade->format('d/m/y')} ".PHP_EOL;
  ?>
