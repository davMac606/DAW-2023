<?php 
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $string = $_POST["teste"];
 
        $codificada = base64_encode($string);


        $salt = "fknhuge";

        $codificada = $codificada . $salt;

        $codificada2 = md5($codificada); 



    }

   


?>

<html>
    <head>
       <style>
        #aviso {
            color: red;
        }
        </style>
    </head>
    <body>
        <p id="teste1"></p>
        <form action="exsenha.php" method=post>
        <input type="text" name="teste" id="teste" onblur = "isEmpty()">
        <span id="aviso"><?php echo $codificada2 ?> </span>
<br><br>
        <input type="submit" name="submit" value="Submit">
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
document.getElementById('teste').value = (makeid(10));  
</script>

    </body>
</html>