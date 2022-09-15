<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adivinhando a senha</title>

</head>

<body>

<?php

//print_r ($_POST)

 $senha = "1234";

 $senhadigitada = $_POST["senha"];

 if($senhadigitada == $senha){

     echo "bem vindo";

 } else {

     echo "errou tente novamente";

 }

 $filename = "senhadigitada.txt";

 if(!file_exists("senhadigitada.txt")){

     $handle = fopen("senhadigitada.txt", "w");

 } else {

     $handle = fopen("senhadigitada.txt", "a");

 }

 fwrite($handle, $senhadigitada."\n");

 fflush($handle);

 fclose($handle);

?>

</body>

</html>
