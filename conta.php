<?php

/* Classe Conta */

//Essas variáveis são chamadas de atributos da Conta ou objetos
//-> Esse simbolo significa que estou acessando um atributo
//public :: Significa que este dado será publico

class Conta                 
{
    public $cpfTitular;                 
    public $nomeTitular;
    public $saldo;

    public function sacar (float $valorASacar)                  //Uma função que está dentro de uma classe é chamada de método
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponivel";
        }else{
            $this->saldo -+ $valorASacar;
        }
    }
}

