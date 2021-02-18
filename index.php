<?php

include('mahasiswa.php');

$mahasiswa_andry = new Mahasiswa();
$mahasiswa_bayu = new Mahasiswa();
$mahasiswa_dhiya = new Mahasiswa();

$mahasiswa_andry->nim = 1;
$mahasiswa_andry->nama = 1;
$mahasiswa_andry->tanggal_lahir = 1;
$mahasiswa_andry->jenis_kelamin = 1;

$mahasiswa_andry->tampilkanAngkatan();
$mahasiswa_andry->tampilkanUmur();
