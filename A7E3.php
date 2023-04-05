<?php 
//hora, minuto, segundo, mes, dia, ano -> padrão do mktime
echo mktime(12, 00, 00, 02, 20, 2022), "<br><br>";
//resultado em Timestamp
echo date("d-m-Y H:i:s",mktime(12, 00, 00, 02, 20, 2022));

echo "<br><br>";

$dt = mktime("12", "00", "00", "02", "20", "2022");
echo date("d/m/Y H:i:s", strtotime("+ 7 day",$dt)), "<br>";

?>