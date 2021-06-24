<?php

namespace App\Models;

require_once('Pengguna.php');

use App\Models\TugasAkhir;

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa()
    {
    }

    Public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setTugasAkhir(TugasAkhir $tga)
    {
        $this->TugasAkhir = $tga;
    }

    public function setPengujiTA(Dosen $pnj)
    {
        $this->pengujiTA = $pnj
    }

    public function getPembimbingTA()
    {
        return $this->pembimbingTA;
    }

    public function getPengujiTA()
    {
        return $this->pengujiTA;
    }
}