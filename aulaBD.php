<?php
if($SERVER["REQUEST_METHOD"] === 'POST') {
    include("conexaoBD.php");

    if (isset($_POST["raBusca"]) && ($_POST["raBusca"] != "")) {
        $raBusca = $_POST["raBusca"];
        $smt = $pdo->prepare("SELECT * FROM alunoPHP WHERE ra = :ra");
        $smt->bindParam(':ra', $raBusca);
    
    } else {
        $smt = $pdo->prepare("SELECT * FROM alunoPHP order by curso, nome");

    }

    try{

        $smt->execute();

        echo "<form method='post'>";
        echo "<table border='1px'>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>RA</th>";
        echo "<th>Nome</th>";
        echo "<th>Curso</th>";
        echo "</tr>";

        while ($row = $smt->fetch()) {
            echo "<tr>";
            echo "<td><input type='radio' name='ra' value='" . $row['ra'] . "'></td>";
            echo "<td>" . $row['ra'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['curso'] . "</td>";
            echo "</tr>";
        }

    }
}









if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    try {
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

        if ((trim($ra) == "") || (trim($nome) == "")) {
            echo "<span id='warning'>Os campos são obrigatórios!</span>";
        } else {
            include("conexaoBD.php");
            $smt = $pdo->prepare("SELECT * FROM alunoPHP WHERE ra = :ra");
            $smt->bindParam(':ra', $ra);
            $smt->execute();

            $rows = $smt->rowCount();

            if ($rows <= 0 ) {
                $smt = $pdo->prepare("INSERT INTO alunoPHP (ra, nome, curso) values(:ra, :nome, :curso)");
                $smt->bindParam(':ra', $ra);
                $smt->bindParam(':nome', $nome);
                $smt->bindParam(':curso', $curso);
                $smt->execute();

                echo "<span id='success'>Aluno cadastrado!</span>";
            } else {
                echo "<span id='errors'>Aluno já existente!</span>";
            }
        }
    } catch (PDOException $ex) {
        echo 'ERROR: ' . $ex->getMessage();
    }
    $pdo = null;
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP BD</title>
</head>
<body>
    <h2>Consulta de Alunos</h2>
    <div>
        <form method="post">
            <input type="text" name="raBusca" id="raBusca" placeholder="Insira o RA a ser buscado" size="10" required><br><br>
            <input type="submit" value="Consultar">
        </form>
    <hr>
    <h2>Cadastro de Alunos</h2>

    <div>
        <form method="post">
            <input type="text" name="ra" id="ra" placeholder="Insira seu RA" size="10" required><br><br>
            

            <input type="text" name="nome" id="nome" placeholder="Insira seu nome" required><br><br>


            <input type="text" name="curso" id="curso" placeholder="Insira seu curso" required><br><br>


            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>