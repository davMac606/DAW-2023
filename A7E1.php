<?php
    $msg = "Insira uma data.";
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $data = $_POST["data"];

    $v_data = explode("/", $data);

    $dia = $v_data[0];
    $mes = $v_data[1];
    $ano = $v_data[2];

    echo $dia . "<br><br>";
    echo $mes . "<br><br>";
    echo $ano . "<br><br>";

if (checkdate($mes, $dia, $ano)) {
$msg ="Data válida. <br><br>";
} else {
    $msg = "Data Inválida. <br><br>";
    }
}
?>

    <html>
      <head>
        <title>Exemplos de data</title>
        <style>
            #msg {
                color: red;
            }
            </style>
    </head>

    <body> 
        <h1>Cadastro de Evento</h1>
    <form method="post">
       <input type="text" id="data" name="data"> 
       <input type="submit" value="Ok"><br>
       <span id="msg"><?php echo $msg; ?>
    </form>
    </body>
</html>

