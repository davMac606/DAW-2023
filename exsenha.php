<?php 
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

 
    $string = $_POST["teste"];
 
    if (empty($string)) {
        $codificada3 = "O campo não pode ser vazio.";
    } else {
        $codificada = base64_encode($string);


        $salt = "aaaaa";
    
        $codificada2 = $codificada . $salt;
        
        $codificada3 = hash_hmac("sha256", $codificada2, $salt); 
    }
  



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
        <input type="text" name="teste" id="teste">
        <span id="aviso"><?php echo $codificada3 ?> </span>
<br><br>
    <input type="submit" name="submit" value="Submit" id="submitBtn">
</form>

       
        <script>

            function testing() {
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
document.getElementById('submitBtn').click();

}
            
          
       var autoRefresh = setInterval(testing,5000);

</script>

    </body>
</html>