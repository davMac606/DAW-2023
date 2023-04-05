<?php 
    date_default_timezone_set("America/Sao_Paulo");
    $atual = new DateTime();
    echo "<br>" . $atual->format('d-m-Y H:i:s');

    $especifica = new DateTime('1990-01-22');
    echo "<br>" . $especifica->format('d-m-Y H:i:s');

    $texto = new DateTime('+13 month');
    echo "<br>" . $texto->format('d-m-Y H:i:s');
    echo "<br><br>";


    $agora = time();
    echo $agora;
    echo "<br><br>";


    echo date("Y-m-d H:i:s", time());
    echo "<br><br>";

    echo date("Y-m-d", time());
    echo "<br><br>";

    echo date("D");
    echo "<br><br>";

    echo date("l");
    echo "<br><br>";

    echo date("F");
    echo "<br><br>";
?>