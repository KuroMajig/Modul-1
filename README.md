# Modul-1

<h4>Lat1_1_312310696.php</h4>

Hapus notasi ( $ ), lalu jalankan kode di atas. Apa yang terjadi?

Jawab: Menghapus tanda $ pada PHP akan menyebabkan error sintaks karena $ wajib digunakan untuk mendeklarasikan variabel.

<h4>Lat1_2_312310696.php</h4>

```
<?php
echo "<h1>Variable</h1></br>";
$angka = 99;
echo "Ini adalah angka = $angka </br>";
$angka_2 = $angka + 1;
echo "Ini hasilnya = $angka_2 </br>";
?>
```

Amati apa hasil dari kode di atas ! Lalu simpulkan.

Jawab: Kode menampilkan angka 99 dan hasil penjumlahan 100. PHP mendukung operasi aritmatika dan interpolasi string.

<h4>Lat1_3_312310696.php</h4>

```
<?php
$addition = 2 + 4;
$subtraction = 6 - 2;
$multiplication = 5 * 3;
$division = 15 / 3;
$modulus = 5 % 2;
echo "Penambahan: 2 + 4 = $addition <br />";
echo "Pengurangan: 6 - 2 = $subtraction <br />";
echo "Perkalian: 5 * 3 = $multiplication <br />";
echo "Pembagian: 15 / 3 = $division <br />";
echo "Pembagian sisa: 5 % 2 = $modulus";
?>
```

Amati apa hasil dari kode di atas ! Lalu simpulkan.

Jawab: operasi aritmatika dasar seperti penjumlahan, pengurangan, perkalian, pembagian, dan modulus dengan hasil yang sesuai.

<h4>Lat1_4_312310696.php</h4>

```
<?php
$x = 4;
$x += 3;
echo "Hasil dari operasi tersebut adalah = $x";
?>
```

Gantikan operator “+=” dengan :
1. “-=”
2. “*=”
3. “/=”
4. “%=”
5. “.=”
Amati apa hasil dari operator tersebut ! lalu simpulkan.

Jawab: 

-= mengurangkan nilai variabel dengan angka yang ditentukan.

*= mengalikan nilai variabel dengan angka yang ditentukan.

/= membagi nilai variabel dengan angka yang ditentukan.

%= menghitung sisa bagi dari variabel dengan angka yang ditentukan.

.= menggabungkan nilai variabel sebagai string dengan nilai yang ditentukan.

<h4>Lat1_5_312310696.php</h4>

```
<?php
$my_name = "anotherguy";
if ( $my_name == "someguy" ) {
echo "Your name is someguy!<br />";
}
echo "Welcome to my homepage!";
?>
```

Isikan variable $my_name dengan nilai yang lain dan simpulkan!

Jawab: Jika $my_name bernilai "someguy", pesan dalam if akan tampil. Jika tidak, hanya pesan di luar if yang muncul.

<h4>Lat1_6_312310696.php</h4>

```
<?php
$destination = "Tokyo";
echo "Traveling to $destination<br />";
switch ($destination){
case "Las Vegas":
echo "Bring an extra $500";
break;
case "Amsterdam":
echo "Bring an open mind";
break;
case "Egypt":
echo "Bring 15 bottles of SPF 50 Sunscreen";
break;
case "Tokyo":
echo "Bring lots of money";
break;
case "Caribbean Islands":
echo "Bring a swimsuit";
break;
}
?>
```

Gantikan nilai dari variable $destination dengan “Amsterdam”, apa yang terjadi? Jelaskan alur kerja dari model switch!

Jawab: apabila $destination diubah menjadi "Amsterdam", outputnya adalah "Traveling to Amsterdam" dan "Bring an open mind". switch memeriksa setiap case dan menjalankan blok kode yang sesuai dengan nilai variabel.

<h4>Lat1_7_312310696.php</h4>

```
<?php
$brush_price = 5;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
for ( $counter = 10; $counter <= 100; $counter += 10) {
echo "<tr><td>";
echo $counter;
echo "</td><td>";
echo $brush_price * $counter;
echo "</td></tr>";
}
echo "</table>";
?>
```

Ganti inkremen dengan $counter += 5, apa yang terjadi? Ganti looping for dengan menggunakan while, dan do-while? Jelaskan bagaimana alur kerja dari looping for, while, dan do-while?

Jawab:
Dengan inkremen $counter += 5, loop akan berjalan dengan kenaikan 5 (10, 15, 20, ..., 100).

* for loop: Inisialisasi, kondisi pengecekan, dan inkremen terjadi dalam satu baris.

* while loop: Kondisi dicek sebelum eksekusi, inkremen di dalam loop.

* do-while loop: Eksekusi terjadi setidaknya sekali, kondisi dicek setelah eksekusi.


<h4>Lat1_8_312310696.php</h4>

```
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
```

terhadap array yang sudah dibuat, lalu tampilkan kembali dengan loop (perulangan), sehingga kita dapat membedakan tiap-tiap fungsi tersebut. Simpan hasil kerja dalam file Lat1_10.php, lalu simpulkan apa perbedaan dari keenam fungsi sorting tersebut diatas!

Jawab: 

* sort() dan rsort() mengurutkan array berdasarkan nilai (ascending dan descending), tanpa mempertahankan kunci.

* asort() dan arsort() mengurutkan array berdasarkan nilai (ascending dan descending), sambil mempertahankan hubungan antara kunci dan nilai.

* ksort() dan krsort() mengurutkan array berdasarkan kunci (ascending dan descending).

<h4>Lat1_9_312310696.php</h4>

```
<?php
function mySum($numX, $numY){
$total = $numX + $numY;
return $total;
}
$myNumber = 0;
echo "Sebelum fungsi dijalankan, myNumber = ". $myNumber ."<br />";
$myNumber = mySum(3, 4);
echo "Setelah fungsi dijalankan, myNumber = ". $myNumber ."<br />";
?>
```

Amati apa hasil dari kode di atas ! Lalu simpulkan.

Jawab: Sebelum fungsi dijalankan, $myNumber adalah 0. Setelah fungsi dijalankan, $myNumber diperbarui menjadi 7, sesuai hasil penjumlahan 3 + 4.

<h4>Lat1_10_312310696.php</h4>

Buatlah sebuah fungsi untuk menyelesaikan permasalahan berikut :
1. Perhitungan fibonacci dengan sistem rekursif, dimana inputan pada fungsi digunakan untuk menunjukkan bilangan ke sekian dari deret tersebut, simpan dalam file Lat1_9a.php.
   
2. Perhitungan nilai pangkat, dengan inputan x (bilangan yang akan dikuadratkan) dan inputan y(bilangan pangkat), simpan dalam file Lat1_9b.php.

<h6>Lat1_9a.php</h6>

```
<?php
function fibonacci($n)
{
    if ($n <= 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$input = 10; // Bilangan ke-sekian dari deret Fibonacci
echo "Bilangan Fibonacci ke-{$input} adalah " . fibonacci($input) . "\n";
?>
```

<h6>Lat1_9b.php</h6>

```
<?php
function power($x, $y)
{
    if ($y === 0) {
        return 1;
    } elseif ($y > 0) {
        return $x * power($x, $y - 1);
    } else {
        return 1 / power($x, -$y);
    }
}
$x = 2;
$y = 3;
echo "Hasil dari {$x} pangkat {$y} adalah " . power($x, $y) . "\n";
?>
```
Jawab: 

1. Fibonacci Rekursif: Fungsi fibonacci($n) menghitung deret Fibonacci ke-n menggunakan rekursi.

2. Nilai Pangkat Rekursif: Fungsi power($x, $y) menghitung nilai pangkat x^y menggunakan rekursi.
