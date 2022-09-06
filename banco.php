<?php

require_once 'conta.php';
require_once 'Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Rafael'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;          //Chamando o metodo recuperar saldo.
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();