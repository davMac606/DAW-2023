<?php 
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    function codificar() {

        $string = $_POST["teste"];

        $codificada = base64_encode($string);
        
        echo "Resultado da codificação: " . $codificada . "<br>";
        
        $stringOr = base64_decode($codificada);
        
        echo "Resultado da decodificação: " . $stringOr . "<br>";
        
    }
  

}

?>

<html>
    <head>
       
    </head>
    <body>
        <form action="exsenha.php" method=post>
        <input type="text" name="teste" id="teste">
</form>
        <script>
            function makeid(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1; 

    }



    return result;

}

document.getElementById('teste').innerHTML = (makeid(10));  
</script>

    </body>
</html>