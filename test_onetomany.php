<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$andry = new Pengguna(3,"Andry Maulana", new Alamat(14, "Pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi A');
$lapak_budi->setId(1);

$lapak_ani = new Penjual();
$lapak_ani->setName('Ani B');
$lapak_ani->setId(2);

$lapak_wati = new Penjual();
$lapak_wati->setName('Wati C');
$lapak_walt->setId(3);

$andry->setPenjual($lapak_budi);
$andry->setPenjual($lapak_ani);
$andry->setPenjual($lapak_wati);

$penjual_andry = $andry->getPenjual();
echo $penjual_andry[0]->getName();// Ada 3 Index (0,1,2) 