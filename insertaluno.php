<?php
define('TAMANHO_MAXIMO', (2 * 1024 * 1024));
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    try {
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

        $foto = $_FILES['foto'];
        $nomeFoto = $foto['name'];
        $tipoFoto = $foto['type'];
        $tamanhoFoto = $foto['size']; 


        if ((trim($ra) == "") || (trim($nome) == "")) {

            echo "<span id='warning'> RA e nome são obrigatórios!</span>";
        } else if ( ($nomeFoto != "") && 
        (!preg_match('/^image\/(jpg|jpeg|png|gif)$/', $tipoFoto))  ) {
            echo "<span id='error'>Não é uma imagem válida!</span>";
        } else if ($tamanhoFoto > TAMANHO_MAXIMO) {
            echo "<span id='error'>A imagem deve possuir no máximo 2MB.</span>";
        } else {
            include("conexaoBD.php");
            $smt = $pdo->prepare("SELECT * FROM alunoPHP WHERE ra = :ra");
            $smt->bindParam(':ra', $ra);
            $smt->execute();

            $rows = $smt->rowCount();

            if ($rows <= 0 ) {
                if($nomeFoto == "") {
                    $fotoBinario = null;
                } else {
                    $fotoBinario = file_get_contents(($foto['tmp_name']));
                }
                $smt = $pdo->prepare("INSERT INTO alunoPHP (ra, nome, curso, foto) values(:ra, :nome, :curso, :foto)");
                $smt->bindParam(':ra', $ra);
                $smt->bindParam(':nome', $nome);
                $smt->bindParam(':curso', $curso);
                $smt->bindParam(':foto', $fotoBinario);
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
