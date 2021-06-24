<?php

namespace App\Models;

use App\Models\TugasAkhir;

require_once('Pengguna.php')

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    public $judulTA;

    function __construct($nim, $nama, $ipk, $alamat, $judulTA)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
    }

    public function inputMatkul()
    {
        
    }

    public function updateProfile()
    {
    }
}