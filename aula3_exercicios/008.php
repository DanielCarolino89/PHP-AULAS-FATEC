<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 2;

$a=$numero%10;
$b=$numero%3;

if($a==0)
echo ' sim divide por 10' ;
if ($b==0 )
echo ' sim divide por 3';
if(($a>0 )&&($b>0 ))
echo 'não é divisível por nenhum destes ';


?>