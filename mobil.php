<?php
require_once 'Kendaraan.php';

class Mobil extends Kendaraan 
{
    private $tipeMobil; // Contoh: SUV, Sedan, MPV

    public function __construct($id, $platNomor, $pemilik, $tarifPerJam, $tipeMobil) 
    {
        // Memanggil constructor class induk
        parent::__construct($id, $platNomor, $pemilik, $tarifPerJam);
        $this->tipeMobil = $tipeMobil;
    }

    public function getTipeMobil() 
    {
        return $this->tipeMobil;
    }

    public function setTipeMobil($tipeMobil) 
    {
        $this->tipeMobil = $tipeMobil;
    }

    // Polymorphism: Override method displayInfo() dari class Kendaraan
    public function displayInfo() 
    {
        return "[MOBIL - {$this->tipeMobil}] " . parent::displayInfo();
    }

    // Polymorphism: Override method hitungBiayaParkir() dengan tambahan biaya layanan mobil
    public function hitungBiayaParkir($jam) 
    {
        $biayaDasar = parent::hitungBiayaParkir($jam);
        $biayaLayanan = 2000; // Biaya tambahan khusus mobil
        return $biayaDasar + $biayaLayanan;
    }
}