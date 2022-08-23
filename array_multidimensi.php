<?php
$arraymultidimensi = [
    [2,3,5],
    [7,6,10],
    [5,7,8],
];
echo "<pre>";
var_dump($arraymultidimensi);
echo "</pre>";

$mahasiswa = [
[    
    'nama' => 'saifur',
    'alamat' => 'kalinyamatan',
    'tanggal_lahir' => '5 Maret 1997',
    'umur' => 22 
],
[
    'nama' => 'Mega',
    'alamat' => 'Lebak',
    'tanggal_lahir' => '24 mei 1999',
    'umur' => 20,
],
];
foreach($mahasiswa as $mahasiswa){
    echo "nama: ".$mahasiswa['nama']."<br/>";
    echo "Alamat: ".$mahasiswa['alamat']."<br/>";
    echo "tanggal_lahir: ".$mahasiswa['tanggal_lahir']."<br/>";
    echo "umur: ".$mahasiswa['umur']."<br/>";
}
