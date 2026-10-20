<?php
require_once 'Mobil.php';
require_once 'Motor.php';

// Inisialisasi beberapa objek
$mobil1 = new Mobil("KND-001", "B 1234 ABC", "Budi Santoso", 5000, "SUV");
$mobil2 = new Mobil("KND-002", "B 5678 EFG", "Siti Rahma", 5000, "Sedan");

$motor1 = new Motor("KND-003", "B 9999 XYZ", "Andi Wijaya", 2000, 150);
$motor2 = new Motor("KND-004", "B 8888 JKL", "Dian Sastro", 2000, 250);

// Durasi parkir (dalam jam)
$durasiMobil1 = 3;
$durasiMobil2 = 2;
$durasiMotor1 = 6;
$durasiMotor2 = 4;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Parkiran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; }
        .container { max-width: 800px; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #4a90e2; padding-bottom: 10px; }
        .card { background: #fafafa; border-left: 4px solid #4a90e2; padding: 12px; margin-bottom: 12px; border-radius: 4px; }
        .card.motor { border-left-color: #2ecc71; }
        p { margin: 5px 0; }
        .total { font-weight: bold; color: #d35400; }
    </style>
</head>
<body>

<div class="container">
    <h2>Sistem Manajemen Kendaraan di Parkiran</h2>

    <h3>Daftar Kendaraan Parkir:</h3>

    <div class="card">
        <p><?php echo $mobil1->displayInfo(); ?></p>
        <p>Lama Parkir: <?php echo $durasiMobil1; ?> Jam</p>
        <p class="total">Total Biaya: Rp<?php echo number_format($mobil1->hitungBiayaParkir($durasiMobil1), 0, ',', '.'); ?></p>
    </div>

    <div class="card">
        <p><?php echo $mobil2->displayInfo(); ?></p>
        <p>Lama Parkir: <?php echo $durasiMobil2; ?> Jam</p>
        <p class="total">Total Biaya: Rp<?php echo number_format($mobil2->hitungBiayaParkir($durasiMobil2), 0, ',', '.'); ?></p>
    </div>

    <div class="card motor">
        <p><?php echo $motor1->displayInfo(); ?></p>
        <p>Lama Parkir: <?php echo $durasiMotor1; ?> Jam (Diskon >5 jam)</p>
        <p class="total">Total Biaya: Rp<?php echo number_format($motor1->hitungBiayaParkir($durasiMotor1), 0, ',', '.'); ?></p>
    </div>

    <div class="card motor">
        <p><?php echo $motor2->displayInfo(); ?></p>
        <p>Lama Parkir: <?php echo $durasiMotor2; ?> Jam</p>
        <p class="total">Total Biaya: Rp<?php echo number_format($motor2->hitungBiayaParkir($durasiMotor2), 0, ',', '.'); ?></p>
    </div>
</div>

</body>
</html>