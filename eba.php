<!DOCTYPE html>
<html lang="en">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $v_num = $_POST['num'];

        $vArray = array(1,3,5,7,9,11,13,15,17,29,31);

        if (in_array($v_num, $vArray) ) {
            echo "<span style= 'color:green;font-weight:bold;'>Acertou!</span>";
        } else {
            echo "<span style='color:red;font-weight:bold;'>Errou!Tente novamente!</span>";
        }
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Em que número estou pensando?</h1>

    <form action="eba.php" method="post">
        <input type="text" placeholder="Digite um número" name="num">

        <input type="submit" value="Acertei?">
    </form>
</body>
</html>