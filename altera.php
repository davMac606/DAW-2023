<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>
<a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
<hr>
<h2>Edição de Alunos</h2>
    
<?php    
    $ra = $_POST['ra'];
    $novoNome = $_POST['nome'];
    $novoCurso = $_POST['curso'];

    $novaFoto = $_FILES['foto'];
    $nomeFoto = $novaFoto['name'];
    $tipoFoto = $novaFoto['type'];
    $tamanhoFoto = $novaFoto['size'];
    
    if ($nomeFoto != "") {
        $fotoBinario = file_get_contents(($novaFoto['tmp_name']));
        $smt = $pdo->prepare('UPDATE alunoPHP SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $smt->bindParam('novoNome', $novoNome);
        $smt->bindParam(':novoCurso', $novoCurso);
        $smt->bindParam('novaFoto', $fotoBinario);
        $smt->bindParam(':ra', $ra);
    } else {
        $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $stmt->bindParam(':novoNome', $novoNome);
        $stmt->bindParam(':novoCurso', $novoCurso);
        $stmt->bindParam(':ra', $ra);
    }
    
    try {
        include("conexaoBD.php");
        

        $stmt->execute();

        echo "Os dados do aluno de RA $ra foram alterados!";

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;

    echo "<form method='post'"
?>
</body>
</html>