<?php
$kendaraan = [
    "Mobil",
    "Sepeda",
    "Bus",
    "Becak",
    "Truk",
    "Andong",
    "Sepeda Motor"
];

echo "Data kendaraan awal:\n";
foreach ($kendaraan as $k) {
    echo $k . "\n";
}

sort($kendaraan);
echo "\nData kendaraan setelah sort():\n";
foreach ($kendaraan as $k) {
    echo $k . "\n";
}

rsort($kendaraan);
echo "\nData kendaraan setelah rsort():\n";
foreach ($kendaraan as $k) {
    echo $k . "\n";
}

$kendaraan = [
    "Mobil",
    "Sepeda",
    "Bus",
    "Becak",
    "Truk",
    "Andong",
    "Sepeda Motor"
];

asort($kendaraan);
echo "\nData kendaraan setelah asort():\n";
foreach ($kendaraan as $key => $k) {
    echo "[$key] => $k\n";
}

arsort($kendaraan);
echo "\nData kendaraan setelah arsort():\n";
foreach ($kendaraan as $key => $k) {
    echo "[$key] => $k\n";
}

ksort($kendaraan);
echo "\nData kendaraan setelah ksort():\n";
foreach ($kendaraan as $key => $k) {
    echo "[$key] => $k\n";
}

krsort($kendaraan);
echo "\nData kendaraan setelah krsort():\n";
foreach ($kendaraan as $key => $k) {
    echo "[$key] => $k\n";
}
?>