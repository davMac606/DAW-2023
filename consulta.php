if($_SERVER["REQUEST_METHOD"] === 'POST') {
    include("conexaoBD.php");

    if (isset($_POST["raBusca"]) && ($_POST["raBusca"] != "")) {
        $raBusca = $_POST["raBusca"];
        $smt1 = $pdo->prepare("SELECT * FROM alunoPHP WHERE ra = :ra");
        $smt1->bindParam(':ra', $raBusca);
    
    } else {
        $smt1 = $pdo->prepare("SELECT * FROM alunoPHP order by curso, nome");

    }

    try{

$smt1->execute();

echo "<form method='post'>";
echo "<table border='1px'>";
echo "<tr>";
echo "<th></th>";
echo "<th>RA</th>";
echo "<th>Nome</th>";
echo "<th>Curso</th>";
echo "<th>Foto</th>";
echo "</tr>";

while ($row = $smt1->fetch()) {
    echo "<tr>";
    echo "<td><input type='radio' name='raExc' value='" . $row['ra'] . "'></td>";
    echo "<td>" . $row['ra'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['curso'] . "</td>";
    if ($row["foto"] == null) {
        echo "<td align='center'>-</td>";
    } else {
        echo "td align='center'><img src='data:image;base64, " . base64_encode($row["foto"]) . " width='50px' height='50px'></td>";
    }
    echo "</tr>";

}

} catch (PDOException $ex) {
echo 'ERROR: ' . $ex->getMessage();
}
$pdo1 = null;
}