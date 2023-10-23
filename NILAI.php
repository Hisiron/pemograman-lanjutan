<?php
// Nama:   M RIVALDI ARWIN HADI WIJAYA
// NPM : 2211010077
// Kelas: 5TI - P2
// Matkul: Pemrograman Lanjut

$nilai = 85;

if ($nilai >= 80 && $nilai <= 100) {
    $grade = 'A';
} elseif ($nilai >= 75 && $nilai < 80) {
    $grade = 'A-';
} elseif ($nilai >= 70 && $nilai < 75) {
    $grade = 'B+';
} elseif ($nilai >= 65 && $nilai < 70) {
    $grade = 'B';
} elseif ($nilai >= 55 && $nilai < 65) {
    $grade = 'C';
} elseif ($nilai >= 30 && $nilai < 55) {
    $grade = 'D';
} elseif ($nilai > 0 && $nilai < 30) {
    $grade = 'E';
} elseif ($nilai == 0) {
    $grade = 'T';
} else {
    echo "Nilai tidak valid";
    exit;
}

echo "Grade Anda adalah: " . $grade . " Dengan Nilai: " . $nilai;
?>