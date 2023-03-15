<?php 
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    function codificar($string) {

 
        $codificada = base64_encode($string);

        if (!empty($string)) {
            echo $codificada;
        }
         
       return $codificada;
    }

    $string = $_POST["teste"];


}

?>

<html>
    <head>
       
    </head>
    <body>
        <p id="teste1"></p>
        <form action="exsenha.php" method=post>
        <input type="text" name="teste" id="teste" onblur = "isEmpty()">
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
function IsEmpty() {

if (document.form.question.value == "") {
  alert("empty");
}
return;
}
document.getElementById('teste').value = (makeid(10));  
</script>

    </body>
</html>