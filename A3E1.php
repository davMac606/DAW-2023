<?php 


$msgN1 = "";
$msgN2 = "";







if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    function calcMedia ($n1, $n2){
        $media = ($n1 + $n2);
        return $media;
    
    }
    
    
    //get possibilita a nao criação de valores pre definidos, os coloca na barra do navegador nota1=x&nota2=
    //TROCA GET PRA POST PARA QUE NAO FIQUE VISIVEL
    
    $n1 =$_POST["nota1"];
    $n2 = $_POST["nota2"];
   
   
    if  (trim($n1) == ""){
      $msgN1= "A nota 1 é obrigatória";
    }elseif (trim($n2) == ""){
    
        $msgN2= "A nota 2 é obrigatória";
    }
    elseif ($n1 > 10) {
        $msgN1 = "A nota não pode ser superior a 10";
    }
    elseif ($n2 > 10) {
        $msgN2 = "A nota não pode ser superior a 10";
    }
    elseif ($n1 < 0) {
        $msgN1 = "A nota não pode ser negativa";
    }
    else if ($n2 < 0) {
        $msgN2 = "A nota não pode ser negativa";
    }
    
    
    
    else{
        
    $media = calcMedia($n1,$n2)/2;
    echo "Media:" . $media . "<br>";
    
    if ($media >= 6.0){
        echo "<span id= 'aprovado'> aprovado! </span>";
    } else{
    
        echo "<span id= 'reprovado'> reprovado! </span>";
    }
    
    
   }
   
}

?>

<html>
    <head>
<title>Média</title>

<style>
    #warning {
        color: red;
    }
    #aprovado {
        background-color: lime;
    }
    #reprovado {
        background-color: red;
    }
    </style>
    </head>
<body>
<h1>Calcula média</h1>
    <form action="A3E1.php" method="POST">
        Nota 1: <hr>
        
        <input type="text" name="nota1" >
        <span id="warning"><small><?php echo $msgN1; ?></small></span> 
        <br><br>
        Nota 2 : <hr>
        <input type="text" name="nota2">
        <span id="warning"><small><?= $msgN2; ?></small></span> 
        <br><br>
    
    
    
        <input type="submit" value="Calcular">
    
    
    </form>
    


</body>

    
</html>