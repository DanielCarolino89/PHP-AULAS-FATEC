<?php
/*
Importar a função criada em 014_a.php para ser utilizada aqui.
*/function calculo_media(float $nota_1, float $nota_2): float{
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
// Calcular chamando a função

$nota_1 = 1;
$nota_2 = 5;

$media2 = calculo_media($nota_1, $nota_2);

echo $media2;

// Calcular chamando a função

$nota_1 = 5;
$nota_2 = 3;

$media3 = calculo_media($nota_1, $nota_2);
echo $media3;

// Calcular chamando a função
?>