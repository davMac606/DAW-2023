<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["raExc"])) {
            echo "Selecione o aluno a ser excluído!";
        } else {
            $raExc = $_POST["raExc"];

            try {
                include("conexaoBD.php");
                $smt2 = $pdo2->prepare("DELETE * FROM alunoPHP WHERE ra = :raExc");
                $smt2->bindParam(':raExc', $raExc);
                $smt2-> execute();

                echo $smt2->rowCount() . " aluno com RA $raExc foi removido!";
            } catch (PDOException $ex) {
                echo 'EROR: ' . $ex->getMessage();
            }
        }
    }
    ?>
