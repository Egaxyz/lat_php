<?php
//1 line
echo "Hello";

//cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$arry = ["rabu", "juni", 30, true];
//menampilkan array var_dump() / print_r()
var_dump( $arry);
echo "<br>";
//menampilkan satu elemen
echo $arry[0];
echo "<br>";

//menampilkan elemen baru pada array
$hari[] = "kamis";
var_dump($hari);
echo "<br>";

foreach($hari as $h){
    echo "$h <br>";
}

//array numeric
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//array assosiatif
$siswa = [
    'nama' => 'Ega',
    'umur' => 17,
    'email' => 'egagunawannovaldi@gmail.com'
];

echo $siswa['nama']. '<br>';

//multiple array

$angk = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $angk[1][1];
echo "<br>";
foreach($angk as $a){
    //csra satu
    echo $a[0] . '<br>';
    echo $a[1] . '<br>';
    echo $a[2] . '<br>';
    //cara dua
    foreach($a as $b){
        echo $b . "<br>";
    }
    echo '<br>';
}

$siswa = [
    ['nama' => 'Ega', 'umur' => 17, 'hobi' => 'Membaca'],
    ['nama' => 'Gunawan', 'umur' => 17, 'hobi' => 'Tidur'],
    ['nama' => 'Novaldi', 'umur' => 17, 'hobi' => 'Game']
];

foreach($siswa as $s){
    foreach($s as $i){
        echo $i . "<br>";
    }
    echo '<br>';
}
?>