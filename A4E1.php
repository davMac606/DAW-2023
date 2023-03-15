<?php
$texto = "  COTIL - unicamp  ";
echo "trim: " . "<br>";
echo "-" . trim($texto) . "-" . "<br>";
echo "left trim:" . "<br>";
echo "-" . ltrim($texto) . "-" . "<br>";
echo "right trim:" . "<br>";
echo "-" . rtrim($texto) . "-" . "<br>";
echo "uppercase:" . "<br>";
echo strtoupper($texto) . "<br>";
echo "lowercase: " . "<br>";
echo strtolower($texto) . "<br>";

echo "uppercase first: " . "<br>";

echo "uc: " . ucfirst($texto) . "<br>";

echo "Capital letters: " . "<br>";

echo ucwords($texto) . "<br>";

echo "string length: " . "<br>";

echo strlen(trim($texto)) . "<br>";

echo "reverse string: " . "<br>";

echo strrev($texto) . "<br>";

echo "string split: " . "<br>";
$str = str_split($texto, 3);
print_r($str);
?>