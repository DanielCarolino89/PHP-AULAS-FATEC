<?php
/*
Escreva um script que imprima qual o maior número.
Converter variáveis strings em inteiros
Use IF
*/
$a = "10";
$b = "1";

$a=(int)$a;
$b=(int)$b;

if ($a > $b)
echo 'a eh maior que b' ;
else
if($b > $a)
echo 'b eh maior que a' ;
else
echo 'a eh igual b' ;


?>