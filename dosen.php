<?php
require_once 'Mahasiswa.php';

class Dosen extends Pegawai
{
    public $nidn;
    public $jabatan_akademis{
    protected $nidn;
    protected $jabatan_akademis

    public function getNidn()
    {
        return $this->nidn;
    }

    public  function mengajar(){
    public function getJabatan_akademis()
    {
        return $this->jabatan_akademis;
    }

    public function setNidn($nidn)
    {
        $this->nidn = $nidn;
    }

    public function setJabatan_akademis($jabatan_akademis)
    {
        $this->jabatan_akademis = $jabatan_akademis;
    }

    public  function mengajar()
    {

    }

    public function meneliti(){
    public function meneliti()
    {

    }
} 