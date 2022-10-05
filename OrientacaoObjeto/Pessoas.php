<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $altura;

    public function __construct($nome, $idade, $altura) 
	{ 
            $this->nome = $nome; 
            $this->idade = $idade; 
            $this->altura = $altura;  
	} 

    public function setNome( $nome ) 
	{ 
	    $this->nome = $nome; 
	} 
	 
	public function getIdade() 
	{ 
	    return $this->nome; 
	}

    public function setIdade( $idade ) 
	{ 
	    $this->idade = $idade; 
	} 
	 
	public function getNome() 
	{ 
	    return $this->idade; 
	}

    public function setAltura( $altura ) 
	{ 
	    $this->altura = $altura; 
	} 
	 
	public function getAltura() 
	{ 
	    return $this->altura; 
	}
}


$p1 = new Pessoa;
$p1 -> nome = ' Daniel ';
$p1 -> idade = 33;
$p1 -> altura = 1.85;

$p2 = new Pessoa;
$p2 -> nome = ' Jessica ';
$p2 -> idade = 25;
$p2 -> altura = 1.56;

$p3 = new Pessoa;
$p3 -> nome = ' Carlos ';
$p3 -> idade = 56;
$p3 -> altura = 1.77;

$p4 = new Pessoa;
$p4 -> nome = ' Ronaldo ';
$p4 -> idade = 30;
$p4 -> altura = 1.65;

$p5 = new Pessoa;
$p5 -> nome = ' Julia ';
$p5 -> idade = 21;
$p5 -> altura = 1.59;

var_dump($p1);
var_dump($p2);
var_dump($p3);
var_dump($p4);
var_dump($p5);
	 


?>