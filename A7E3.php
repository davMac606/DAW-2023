<?php 
//hora, minuto, segundo, mes, dia, ano -> padrão do mktime
echo mktime(12, 00, 00, 02, 20, 2022), "<br><br>";
//resultado em Timestamp
echo date("d-m-Y H:i:s",mktime(12, 00, 00, 02, 20, 2022));

echo "<br><br>";

$dt = mktime("12", "00", "00", "02", "20", "2022");
echo date("d/m/Y H:i:s", strtotime("+ 7 day",$dt)), "<br>";

$data1 = mktime(0, 0, 0, 10, 10, 2005);
$data2 = mktime(0, 0, 0, 10, 10, 2022);
$difSeconds = ($data2 - $data1);
echo "<br>";
echo "Diferença em segundos: " . $difSeconds, "<br><br>";


$difMinutes = ($data2 - $data1)/60;
echo "Diferença em minutos: " . $difMinutes, "<br><br>";


$difHours = ($data2 - $data1)/60 / 60;
echo "Diferença em horas: " . $difHours, "<br><br>";

$difDays = ($data2 - $data1) / 60 / 60 / 24;
echo "Diferença em dias: " . $difDays, "<br><br>";


$difMonths = ($data2 - $data1) / 60 / 60 / 24 / 30;
echo "Diferença em meses: " . $difDays, "<br><br>";


$difYears = ($data2 - $data1) / 60 / 60 / 24 / 30 / 12;
echo "Diferença em anos: " . $difYears, "<br><br>";
?>