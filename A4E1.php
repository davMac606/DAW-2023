<?php
$texto = "  COTIL - unicamp  ";
echo "trim: " . "<br>";
echo "-" . trim($texto) . "-" . "<br>";
echo "<br>";

echo "left trim:" . "<br>";
echo "-" . ltrim($texto) . "-" . "<br>";
echo "<br>";

echo "right trim:" . "<br>";
echo "-" . rtrim($texto) . "-" . "<br>";
echo "<br>";

echo "uppercase:" . "<br>";
echo strtoupper($texto) . "<br>";
echo "<br>";

echo "lowercase: " . "<br>";
echo strtolower($texto) . "<br>";
echo "<br>";

echo "uppercase first: " . "<br>";
echo "uc: " . ucfirst($texto) . "<br>";
echo "<br>";

echo "Capital letters: " . "<br>";
echo ucwords($texto) . "<br>";
echo "<br>";

echo "string length: " . "<br>";
echo strlen(trim($texto)) . "<br>";
echo "<br>";

echo "reverse string: " . "<br>";
echo strrev($texto) . "<br>";
echo "<br>";

echo "string split: " . "<br>";
$str = str_split($texto, 3);
print_r($str);
echo "<br>";

echo "first ocurrence position of a string: " . "<br>";
echo strpos($texto, "unicamp") . "<br>"; 
echo "<br>";

$email = "simone@cotil.unicamp.br";
echo "return string from specified char: " . "<br>";
echo strchr($email, "@") . "<br>";
echo "<br>";

echo "return string before specified char: " . "<br>";
echo strchr($email, "@", true) . "<br>";
echo "<br>";

echo "return part of a string specified by char pos(beginning at 1, not 0)" . "<br>";
echo substr('abcef', 1 ) . "<br>";
echo substr('abcdef', 1, 3) . "<br>";

echo str_replace("i","x", $texto) . "<br> <br>";

echo "casting: " . "<br>";

echo "string: " . "<br>";
$foo = "0";
echo "<br> <br>";
echo "int: " . "<br>";
$foo += 2;
echo "<br> <br>";
echo "float: " . "<br>";
$foo = $foo + 1.3;
echo $foo;
echo "<br> <br>";

$senha = "minhasenha";

echo "<br> *** md5 *** <br>";
$x = md5($senha);
echo ($x);
echo "<br>";

if (md5($senha) == $x){
    echo "Senha ok <br> <br>";

}

//com salt - Uma string salt para base encriptava
$salt = "c0tilUn1camp";
$senha = $senha . $salt;
echo "senha =" . $senha;
echo "<br>";


$x = md5($senha);
echo ($x);
echo "<br>";

echo "<br> *** SHA1 *** <br>";
$x = sha1($senha);
echo $x;
echo "<br>";

if (sha1($senha) == $x) {
    echo "Senha ok! <br> <br>";
}












?>