<?php
require_once 'Kendaraan.php';

class Motor extends Kendaraan 
{
    private $kapasitasMesin; // Dalam cc (misal: 150cc)

    public function __construct($id, $platNomor, $pemilik, $tarifPerJam, $kapasitasMesin) 
    {
        parent::__construct($id, $platNomor, $pemilik, $tarifPerJam);
        $this->kapasitasMesin = $kapasitasMesin;
    }

    public function getKapasitasMesin() 
    {
        return $this->kapasitasMesin;
    }

    public function setKapasitasMesin($kapasitasMesin) 
    {
        $this->kapasitasMesin = $kapasitasMesin;
    }

    // Polymorphism: Override method displayInfo()
    public function displayInfo() 
    {
        return "[MOTOR - {$this->kapasitasMesin}cc] " . parent::displayInfo();
    }

    // Polymorphism: Override method hitungBiayaParkir() dengan diskon jika lebih dari 5 jam
    public function hitungBiayaParkir($jam) 
    {
        $total = parent::hitungBiayaParkir($jam);
        if ($jam > 5) {
            $total -= 2000; // Potongan harga parkir lama
        }
        return $total;
    }
}