<?php


class titular
{
    private  $cpf;
    private $nome;

    public function __construct(Cpf $cpf,string $nome)
    {
        $this ->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this ->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    
    private function validaNomeTitular(string $nomeTitular)                         //Metodo valida nome.
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter no minimo 5 caracteres";
            exit();
        }
    }
}