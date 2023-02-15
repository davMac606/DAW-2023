<?php
//$ra = "121212";
//$nome = "Simone";

//echo $ra . " " . $nome ;


$nome = "Cotil";
echo $nome;
echo "<br><br>";

var_dump($nome); //quantidade de caracteres e tipo da variavel
echo "<br><br>";

$outronome = "unicamp";

echo $nome ."-". $outronome; //concatena, mostra junto
echo "<br><br>";


$nulo = null;
$vazio = "";

//unset($nome); //remove "limpa" a variavel, para limpar mais de uma usar virgula

if (isset($nome)){ //ve se a variavel esta setada, is set se sim mostra, se nao mostra vazio, vai mostrar como vazia pois deu unset, se colocar !isset se nao esta setada
    echo $nome;
    echo "<br><br>";


} else{
    echo "a variavel esta vazia";
}

$valor = 50.15;
echo $valor;
echo "<br><br>";

$aprovado = true;
echo $aprovado;
echo "<br><br>";

$disciplinas = array("bd", "lp", "daw");
echo $disciplinas[2];
echo "<br><br>";


// constantes ----------------------------------------------------------


define("PI", 3.14);
define("Nome_Aluno", "Maria");



$resultado = 3 * PI;
echo $resultado. "<BR><BR>";
echo "Nome do Aluno:" .Nome_Aluno . "<BR><BR>";


//---------------------sUPER VARIAVEIS -------------








?>