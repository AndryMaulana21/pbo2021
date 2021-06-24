<?php

namespace App\Models;

use App\Models\Mahasiswa;

class TugasAkhir
{
    public $id;
    public $judulTA;
    public $mahasiswa;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswa = $mahasiswa;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }

    public function getId()
    {
        return $this->id = $id;
    }

    public function getJudulTA()

    
}