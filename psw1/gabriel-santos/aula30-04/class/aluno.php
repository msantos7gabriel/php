<?php 

class Aluno {
    private string $nome;
    private int $idade;
    private string $endereco;
    private string $cidade;
    private string $estado;
    private string $cpf;

    

    /**
     * Get the value of nome
     */ 
    private function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    private function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    private function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    private function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    private function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    private function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */ 
    private function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */ 
    private function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    private function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    private function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    private function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    private function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function __construct($nome, $idade, $endereco, $cidade, $estado, $cpf){
        $this -> setNome($nome ?? 'Não informado');
        $this -> setIdade($idade ?? 'Não informado');
        $this -> setEndereco($endereco ?? 'Não informado');
        $this -> setCidade($cidade ?? 'Não informado');
        $this -> setEstado($estado ?? 'Não informado');
        $this -> setCpf($cpf ?? 'Não informado');
    }

    public function getInfo(){
        echo "Nome: " . $this -> getNome() . "<br>";
        echo "Idade: " . $this -> getIdade() . "<br>";
        echo "Endereço: " . $this -> getEndereco() . "<br>";
        echo "Cidade: " . $this -> getCidade() . "<br>";
        echo "Estado: " . $this -> getEstado() . "<br>";
        echo "CPF: " . $this -> getCpf() . "<br>";
    }
}