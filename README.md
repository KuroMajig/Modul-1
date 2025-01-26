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
