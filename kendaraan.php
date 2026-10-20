<?php

class Kendaraan 
{
    // Encapsulation: Access Modifier (private & protected)
    private $id;
    private $platNomor;
    protected $pemilik;
    protected $tarifPerJam;

    // Constructor untuk inisialisasi objek
    public function __construct($id, $platNomor, $pemilik, $tarifPerJam) 
    {
        $this->id = $id;
        $this->platNomor = $platNomor;
        $this->pemilik = $pemilik;
        $this->tarifPerJam = $tarifPerJam;
    }

    // Getter dan Setter
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getPlatNomor() 
    {
        return $this->platNomor;
    }

    public function setPlatNomor($platNomor) 
    {
        $this->platNomor = $platNomor;
    }

    public function getPemilik() 
    {
        return $this->pemilik;
    }

    public function setPemilik($pemilik) 
    {
        $this->pemilik = $pemilik;
    }

    public function getTarifPerJam() 
    {
        return $this->tarifPerJam;
    }

    public function setTarifPerJam($tarifPerJam) 
    {
        $this->tarifPerJam = $tarifPerJam;
    }

    // Method umum
    public function displayInfo() 
    {
        return "ID: {$this->id} | Plat Nomor: {$this->platNomor} | Pemilik: {$this->pemilik} | Tarif: Rp" . number_format($this->tarifPerJam, 0, ',', '.') . "/jam";
    }

    // Method yang nantinya di-override (Polymorphism)
    public function hitungBiayaParkir($jam) 
    {
        return $jam * $this->tarifPerJam;
    }
}