<?php

$op = 3;
 switch($op){
    case 1;
   // cadastrar();
    echo "Cadastro";
    break;

    case 2;
    //emitirRelatorioVenda();
    echo "Relatorios";
    break;
    default:
    echo "Opção invalida";
    break;
 }

 echo "<br> oi após break";



 $x = 2;
 if($x%2== 0){
    $resultado = "par";

 }else{
    $resultado = "ímpar";

 }
 $resultado = ($x%2)==0 ? "par" : "ímpar";
 echo $resultado;
?>