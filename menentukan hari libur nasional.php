<?php
// Daftar hari libur nasional
$publicHolidays = [
    '2024-01-01', // Tahun Baru
    '2024-12-25', // Natal
    // Tambahkan tanggal libur lainnya
];

// Fungsi untuk memeriksa apakah tanggal adalah hari kerja
function isWorkday($date) {
    global $publicHolidays;
    $date = new DateTime($date);
    $dayOfWeek = $date->format('w');
    $formattedDate = $date->format('Y-m-d');

    // Memeriksa apakah tanggal adalah akhir pekan atau hari libur
    if ($dayOfWeek >= 1 && $dayOfWeek <= 5 && !in_array($formattedDate, $publicHolidays)) {
        return true;
    }
    return false;
}

// Fungsi untuk mencetak hari kerja dalam rentang tanggal
function printWorkdays($startDate, $endDate) {
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = new DateInterval('P1D'); // Interval 1 hari
    $dateRange = new DatePeriod($start, $interval, $end->modify('+1 day')); // Menambahkan satu hari agar endDate termasuk
    
    foreach ($dateRange as $date) {
        if (isWorkday($date->format('Y-m-d'))) {
            echo $date->format('Y-m-d') . " adalah hari kerja.<br>";
        } else {
            echo $date->format('Y-m-d') . " adalah akhir pekan atau hari libur.<br>";
        }
    }
}

// Rentang tanggal yang ingin diperiksa
$startDate = '2024-08-10'; // Format YYYY-MM-DD
$endDate = '2024-08-20';   // Format YYYY-MM-DD

printWorkdays($startDate, $endDate);
?>