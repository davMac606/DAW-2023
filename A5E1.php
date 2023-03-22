<?php

$aExemplo = array( "ra" => 18101,
"serie"=>3,
"aluno" => array ("nome"=> "José A.", "sobrenome"=> "Matioli"));

echo $aExemplo["ra"] . " - " . $aExemplo["aluno"]["nome"] . " " . $aExemplo["aluno"]["sobrenome"];


$bExemplo = array (12345, 8, "J. A. Matioli");

echo "<br>";
echo "<br>";
echo $bExemplo[0] . "-" . $bExemplo[2];
$bExemplo[2] = "J. B Matioli";
echo "<br>";



?>