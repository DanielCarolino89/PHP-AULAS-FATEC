<?php
/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
Se estiver fora do intervalo, informar que não existe o mês

Utilize array.
*/

$mes = [
    "Janeiro", "Fevereiro",
    "Março", "Abril",
    "Maio", "Junho",
    "Julho", "Agosto",
    "Setembro", "Outubro",
    "Novembro", "Dezembro"];
  
    $numMes = 8;
  
    if($numMes >=1 && $numMes <=12){
      echo $mes[$numMes - 1];
    }else{
      echo "Mês inválido";
    }
