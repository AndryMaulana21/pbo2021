<?php

 include('Mahasiswa.php');
 require_once ('Mahasiswa.php');
 require_once ('MahasiswaBaru');
 require_once ('Dosen.php');
 require_once ('Pegawai.php');

 $mahasiswa_andry = new Mahasiswa();
 $mahasiswa_bayu = new Mahasiswa();
 $Mahasiswa_dhiya = new Mahasiswa();
 $andry = new Mahasiswa('H1101191053','Andry Maulana','2001-05-28'.'PRIA');

 $mahasiswa_andry->nim = 1;
 $mahasiswa_andry->nama = 1;
 $mahasiswa_andry->tanggal_lahir = 1;
 $mahasiswa_andry->jenis_kelamin = 1;
 $bayu = new Mahasiswa('H1101191047','Bayu Firmadi','2001-06-12','Pria');

 $mahasiswa_andry->tampilkanAngkatan();
 $mahasiswa_andry->tampilkanUmur(); 
 $dhiya = new Mahasiswa('H1101191053','Dhiya Ulhaq','2001-04-24','Pria');

 $dhiya->tampilkanAngkatan();
 $dhiya->tampilkanUmur();

 ?> 
