<?php 

$turmas = array(

    "3DSD"=>array("12121"=>"Amanda", "343434"=>"Simone"),
    "2DSD"=>array("676676"=>"Lucas", "987978"=> "Jessica"),
    "1DSD"=>array("65654"=>"Paulo", "788787"=>"Julia")
    

);


// ou if($_GET["turma"] == " "){echo "informe a turma"; } else {

// $turma =strtoupper( $_GET["turma"]); }

//OU if (!isset($_GET["turma"]) ||  (trim ($_GET[$turma]) == "") { echo "taaammama";} else{ "continua cod}




$turma =strtoupper( $_POST["turma"]); //get pois é da url que vamos pegar as informações, post troca para pegar do formulario

echo "<h1> Alunos da Turma " . $turma . "</h1>";

echo "<table border='1px'>";

foreach ($turmas[$turma] as $aluno){
    echo "<tr><td>" . $aluno . "</td></tr>";
}

echo "</table>";

?>

<html>

<head>
    
</head>
<body>
    <h1>Busca de Turmas</h1>

    <form method="POST">
    <input type="text" name="turma">
    <input type="submit" value="Buscar">
</form>
</body>
</html>