<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\EsJeruk;
use App\Teh;

$cendol_andry = new Cendol();
$cendol_andry->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat()l
$kopi_aming->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();
$kopi_asiang->tambahSusu();
$kopi_asiang->minum();

EsJeruk::diLihat();

$teh_mantap = new Teh();
$teh_mantap->buat();
$teh_mantap->tambahEs();
$teh_mantap->minum();