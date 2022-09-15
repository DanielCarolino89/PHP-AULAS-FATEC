<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
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

$media = calculo_media($nota_1, $nota_2);

echo $media;


?>