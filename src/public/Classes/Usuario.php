<?php

class Usuario {
private $_nome;
private $_idade;
    function __construct($nome, $idade){
        $this->setNome($nome);
        $this->setIdade($idade);
        echo 'Novo usuário criado' . '<br>';

    }
    
    function getNome(){
        return $this->_nome;
    }
    function setNome($value){
        if ($value !=''){
            $this->_nome = $value;
        }
        else{
            throw new Exception ('O nome é obrigatorio');
        }
    }
    function getIdade(){
        return $this->_idade;
    }

    function setIdade($value){
        if ($value > 0){
            $this->_idade = $value;
        }
        else{
            throw new Exception ('Idade tem que maior que zero');
        }
    }
    
}

class Professor extends Usuario {
    private $_salario;

    function __construct($nome,$idade,$salario){
        parent::__construct($nome,$idade);
        $this->setSalario($salario);
        echo 'Novo Professor criado'.'<br>';
    }

    function getSalario(){
        return $this->_salario;
    }

    function setSalario ($value){
        if ($value>=0){
            $this->_salario = $value;
        }
        else{
            throw new Exception ('O salario não pode ser negativo');
        }
    }
}

class Estudante extends Usuario {
    private $_notas = [];

    function __construct($nome, $idade,$notas){
        parent::__construct($nome,$idade);
        $this->setNotas($notas);
        echo 'Novo Estudante criado'.'<br>';
    }

    function getNotas(){
        return $this->_notas;
    }

    function setNotas($values){
        $negativo_encontrado = false;
        foreach ($values as $k => $v){
            if ($v < 0){
                $negativo_encontrado = true;
            }
        }
        if (!$negativo_encontrado){
            $this->_notas = $values;
            
        } else 
throw new Exception ('Notas não pode er negativas');
        
    }

}

$professor1 = new Professor('Joao',30, 3500);
$professor2 = new Professor('Joao',50, 4000);
$estudante1 = new Estudante('Ana',14,[70,85,62]);
$estudante2 = new Estudante('Ana',13,[72,67,84]);
echo 'Nome do Professor:' . $professor1->getNome() . '<br>';
echo 'Idade do Professor:' . $professor1->getIdade() . '<br>';
echo 'Salario do Professor:' . $professor1->getSalario() . '<br>';

echo 'Nome do Estudante:' . $estudante2->getNome() . '<br>';
echo 'Idade do Estudante:' . $estudante2->getIdade() . '<br>';


foreach ($estudante2->getNotas() as $k => $nota) {
    echo $nota . '<br>';
}




