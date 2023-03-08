<?php 
 function calcMedia ($n1, $n2){
     $media = ($n1 + $n2);
     return $media;
 
 }
 
 
 //get possibilita a nao criação de valores pre definidos, os coloca na barra do navegador nota1=x&nota2=
 //TROCA GET PRA POST PARA QUE NAO FIQUE VISIVEL
 
 $n1 =$_GET["nota1"];
 $n2 = $_GET["nota2"];


 if ( (trim($n1) == "") || (trim($n2) == "")) {
    echo "<span id='warning'> informe as duas notas!</span>";
 } else{
 $media = calcMedia($n1,$n2)/2;
 echo "Media:" . $media . "<br>";
 
 if ($media >= 6.0){
     echo "<span id= 'aprovado'> aprovado! </span>";
 } else{
 
     echo "<span id= 'reprovado'> reprovado! </span>";
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
    <form action="A3E1.php" method="get">
        Nota 1: <hr>
        
        <input type="text" name="nota1" >
        <br><br>
        Nota 2 : <hr>
        <input type="text" name="nota2">
        <br><br>
    
    
    
        <input type="submit" value="Calcular">
    
    
    </form>
    


</body>

    
</html>