<?php
$turmas = array(

    "3DSD"=>array("12121"=>"Amanda", "343434"=>"Simone"),
    "2DSD"=>array("676676"=>"Lucas", "987978"=> "Jessica"),
    "1DSD"=>array("65654"=>"Paulo", "788787"=>"Julia")
    

);

$turma = $_GET["turma"]; //get pois é da url que vamos pegar as informações

echo "<h1> Alunos da Turma " . $turma . "</h1>";

echo "<table border='1px'>";

foreach ($turmas[$turma] as $aluno){
    echo "<tr><td>" . $aluno . "</td></tr>";
}

echo "</table>";

?>