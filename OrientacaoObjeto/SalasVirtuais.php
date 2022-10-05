<?php

class SalaVirtual
{
    public $professor;
    public $disciplina;
}

$s1 = new SalaVirtual;
$s1 -> professor = ' Orlando ';
$s1 -> disciplina = ' Desenvolvimento web 2';

$s2 = new SalaVirtual;
$s2 -> professor = ' Nilton ';
$s2 -> disciplina = ' Banco de dados';


var_dump($s1);
var_dump($s2);

?>