<?php
$arrayExemplo = array ("Linguagem1" => "Php", "Linguagem2" => "SQL", "Linguagem3" => 100, "Linguagem4" => "Assembly");

print_r($arrayExemplo);
shuffle($arrayExemplo);

echo "<hr> After shuffling array: <br>";
print_r($arrayExemplo);

echo "<hr><h2>Update page to see result.</h2>";

sort($arrayExemplo);
echo "<hr> After sort: <br>";
print_r($arrayExemplo);



$str= "curso1=Informática&curso2=Edificações&curso3=Enfermagem";
parse_str($str, $cursos);
echo "<hr> Após organizar, & é dado como um separador: <hr>";
print_r($cursos);

$str2= "Informática Edificações Enfermagem";
echo "<br>";
echo "<br>";
$cursos = explode (" ",$str2); //voce declara que o separador é o espaço
echo "<br>";
echo "<br>";
print_r($str2);

$cursos = array("29", "03", "2023");
$str3 = implode ("/", $cursos);
echo ($str3); //echo é pra string, e print_r serve pra array 



$turmas = array(

    "3DSD" =>array("12121"=>"Amanda", "343434"=>"Simone"),
    "2DSD"=>array("676676"=>"Lucas", "987978"=> "Jessica"),
    "1DSD"=>array("65654"=>"Paulo", "788787"=>"Julia"),
    

);

$turma = $_GET["turma"]; //get pois é da url que vamos pegar as informações

echo "<h1> Alunos da Turma " . $turma . "<h1>";

echo "<table border='1px'>";

foreach ($turma[$turma] as $aluno){
    echo "<tr><td>" . $aluno . "</td> </tr>";
}

echo "</table>";




















?>