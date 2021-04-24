<?php
require_once('vendor/autoload.php');

use App\Frontend\MyDate as FMyDate;
use App\MyDate;

$tanggal = new MyDate();
$tgl = new MyDate();

$tgl->setDay(28);
$tgl->setMonth(05);
$tgl->setYear(2001);

echo $tgl->getYear();

echo $tanggal->penanggalan();