<?php

/* Classe Conta */

//Essas variáveis são chamadas de atributos da Conta ou objetos
//-> Esse simbolo significa que estou acessando um atributo
//public :: Significa que este dado será publico
//Classe é a forma do bolo e objeto é bolo feito.

class Conta                 
{
    public $cpfTitular;                 
    public $nomeTitular;
    public $saldo = 0;              

    public function sacar (float $valorASacar)                  //Uma função que está dentro de uma classe é chamada de método
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponivel";
            return; 
        }
        
        $this->saldo -= $valorASacar;
    }

    public function depositar (float $valorADepositar) : void    //void: esse metodo nao devolve nada pra gente nao tem retorno
    {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;                                             //return :: quando o metodo chegar no return ele para a execução
        }
        
        $this->saldo += $valorADepositar;  
    }

    public function transferir (float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Indisponivel!";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}

