<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aula 10</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h2>
        Consulta de Alunos
        <a href="consulta.php"></a>
    </h2>
    <hr>
    <div>
        <form method="post">
            <input type="text" name="raBusca" id="raBusca" placeholder="Insira o RA a ser buscado" size="10"><br><br>
            <input type="submit" value="Consultar">
        </form>
    </div>
    <hr>
    
<?php

$ra = $_POST['ra'];
$nome = $_POST['nome'];
$curso = $_POST['curso'];

try {

    include("conexaoBD.php");

    $smt = $pdo->prepare("UPDATE  alunoPHP SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra");

    $smt->bindParam(':novoNome', $novoNome);
    $smt->bindParam(':novoCurso', $novoCurso);
    $smt->bindParam(':ra', $ra);
    $smt->execute();

    echo $smt->rowCount() . " aluno com RA $ra foi atualizado!";

}
catch (PDOException $ex) {
    echo 'ERROR: ' . $ex->getMessage();
}
?>
    
</body>
</html>