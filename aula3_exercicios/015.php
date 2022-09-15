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
Crie validações na função, para que os parâmetros aceitos estejam 
entre 0 e 10.
Crie constantes para os limites ( 0 e 10 )
*/

function calculo_media(float $nota_1, float $nota_2): float{
    $media=($nota_1 + $nota_2)/2;

 if($media <= 4.9)
 echo ' reprovado ';
 if($media > 5 && $media <7)
 echo ' recuperacao ';
 if($media > 7)
 echo ' aprovado ';
    return $media;
}
$nota_1 = 9;
$nota_2 = 4;

if(0<10)
$media = calculo_media($nota_1, $nota_2);

echo $media;


?>