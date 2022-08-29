<?php

require_once 'conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Rafael Teles');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;          //Chamando o metodo recuperar saldo.
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
