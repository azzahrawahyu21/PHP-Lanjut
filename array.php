<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Array</title>
</head>
<?php
// Buat array dengan index nama dan umur
$data = array(
    array("nama" => "Zahra", "umur" => 19),
    array("nama" => "Zihan", "umur" => 19),
    array("nama" => "Ergi", "umur" =>19),
    array("nama" => "Ajeng", "umur" => 19),
    array("nama" => "Elin", "umur" => 18),
    array("nama" => "Wahyu", "umur" => 19),
    array("nama" => "Cahya", "umur" => 19),
    array("nama" => "Zenila", "umur" => 19),
    array("nama" => "Wilu", "umur" => 19),
    array("nama" => "Akma", "umur" => 19),
    array("nama" => "Oliv", "umur" => 19),
    array("nama" => "Amel", "umur" => 21),
    array("nama" => "Mig", "umur" => 19),
    array("nama" => "Rahayu", "umur" => 19),
    array("nama" => "Prata", "umur" => 19)
);

// Konversi array menjadi format JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON data
echo nl2br($json_data);
?>
</html>