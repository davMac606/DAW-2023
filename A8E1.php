<?php
    $msg = "";
    $contaVisitas = 0;
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        if(!isset($inome)) {
            $msg = "Insira um nome!";
        } 
        if(!isset($password)) {
            $msg = "";
            $msg = "Insira uma senha!";
        } 
        if (!isset($cor)) {
            $msg = "";
            $msg = "Insira uma cor!";
        } 
        else {
            
            $msg = "Cadastro efetuado com sucesso!";
            header("Location: A8E2.php");
        }
    
        $inome = $_POST["inome"];
        $password = $_POST["password"];
        $cor = $_POST["cor"];
        $idade = $_POST["idade"];
        
        setcookie("inome", $inome);
        setcookie("password", $password);
        setcookie("cor", $cor);
        setcookie("idade", $idade);
        setcookie("contaVisitas", $contaVisitas);

    }
?>
<html>
    <form method="post">
        Nome: <br>
        <input type="text" name="inome"><br><br>
        Senha: <br> 
        <input type="password" name="password"><br><br>
        Cor:<br>
        <input type="color" name="cor"><br><br>
        Idade:<br>
        <input type="number" name="idade"><br><br>

        <input type="submit" value="Ok"><br><br>
        <?php echo $msg ?>
        <?php echo $inome ?>
        <?php echo $password ?>
    </form>
</html>