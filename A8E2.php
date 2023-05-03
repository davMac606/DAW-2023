<?php
if (!isset($_COOKIE['inome'])) {
    $msg = "Você não está logado!";

} else {
    $inome - $_COOKIE['inome'];
    $password = $_COOKIE['password'];
    $cor = $_COOKIE['cor'];
    $idade = $_COOKIE['idade'];
    
    if ($idade < 18) {
        $msg = "Você não pode acessar esse conteúdo!";
    } else {
        $cor = $_COOKIE["cor"];

        if($contaVisitas > 0) {
            $msg = "Olá" . $inome . ", seja bem vindo novamente!";
            $contaVisitas++;
            setcookie("contaVisitas", $contaVisitas);
        } else {
            $msg = "Olá" . $inome . ", seja bem vindo!";
            $contaVisitas++;
            setcookie("contaVisitas", $contaVisitas, time() + 3600, "/");
        } 
    }
}
?>
<html>
    <head>
        <title>Exemplo de cookie</title>
    </head>
    <body style="background-color: <?= $cor ?>">

    </body>
</html>

