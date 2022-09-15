<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Crie uma função com o nome calculo_media.
Use tipagem estrita e limite os parâmetros a receber float.
*/

function calculo_media(int $nota_1,int $nota_2){
    $media=($nota_1 + $nota_2)/2;

 if($media <= 4.9)
 echo ' reprovado ';
 if($media > 5 && $media <7)
 echo ' recuperacao ';
 if($media > 7)
 echo ' aprovado ';
}

$nota_1 = 9;
$nota_2 = 4;

$aux = calculo_media($nota_1,$nota_2);

$format_number1 = number_format($aux, 2);


echo $aux;

?>