<?php 

$myArray = array();
$myArray = array("Apple", "Melon", "Grape");


echo "<br>";
echo "<br>";
print_r($myArray); //array em si
echo "<br>";
echo "<br>";
echo($myArray[0]); //funciona, pq na posicao 0 tem string
echo "<br>";
echo "<br>";
unset ($myArray[1]);// remove
print_r($myArray);
$myArray[1] = "Banana"; //adiciona
echo "<br>";
echo "<br>";
print_r($myArray);
echo "<br>";
echo "<br>";
sort($myArray); //organiza
print_r($myArray);
echo "<br>";
echo "<br>";
echo count($myArray); 
echo "<br>";
echo "<br>";
echo sizeof($myArray);
echo "<br>";
echo "<br>";

array_push($myArray, "DragonFruit"); //adiciona elemento no final

foreach ($myArray as $fruta){
    echo $fruta . ", ";
}
echo "<br>";
echo "<br>";
array_pop($myArray); //tira o ultimo 
print_r($myArray);
echo "<br>";
echo "<br>";

array_shift($myArray); //remove o primeiro
print_r($myArray);
echo "<br>";
echo "<br>";

array_unshift($myArray, "Orange");
print_r($myArray);//adiciona na primeira

echo "<br>";
echo "<br>";

function insertLimit($valor) {
    return "Fruta: " . $valor;
}
$myArray = array_map("insertLimit", $myArray); //permite a execução de uma função para itens do array

foreach($myArray as $fruta) {
    echo $fruta . "<br>";
}
echo "<br>";
echo "<br>";
$keys = array_keys($myArray);
foreach ($keys as $key) {
    echo $key . ", ";
}
echo "<br>";
echo "<br>";


$myArray2 = array("one" => "Apple", "two"=> "Melon", "three"=>"Grape");
$key1 = array_search("Orange", $myArray2) ;
//retorna o indice 
echo $key1;

echo "<br>";
echo "<br>";
$key2 = in_array("Orange", $myArray2) ;
//retorna o indice 
echo $key2;

/*$i = 0;
for ($i == 0; $i <= sizeof($myArray); $i++){
    echo $myArray[$i] . ", ";
}*/


echo array_key_exists("two", $myArray2)? "Has Melon":"Has no Melon";












?>