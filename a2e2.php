<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Teste</title>
    <style>
        .sex {
            background-color:red;
        }
    </style>
</head>
<body>
    <div class="container container-fluid sex">
        <div class="row">
            <?php

//para arredondar valores 

//echo round(5.5,0)."<br>"; //6

//if (1=="1");
//=== significa igual em valor e tipo

$media = 6;

if($media >= 6.0){
    echo "Aprovado";
}else if (($media>3.0) && ($media <6.0)){
    echo "DEPENDENCIA";

}else{
    echo "reprovado";
}



?>
        </div>

    </div>
    
</body>
</html>

