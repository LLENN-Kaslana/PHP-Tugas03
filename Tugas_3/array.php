<?php
// 1. Menyimpan 5 nilai angka ke dalam array
$nilai = [80, 75, 90, 85, 70];

// 2. Menampilkan seluruh isi array
echo "Isi Array: ";
foreach ($nilai as $n) {
    echo $n . " ";
}
echo "<br>";

// 3. Menghitung total dan rata-rata
$total = array_sum($nilai); // Menjumlahkan semua isi array
$jumlah_data = count($nilai); // Menghitung ada berapa data di array
$rata_rata = $total / $jumlah_data;

echo "Total Nilai: " . $total . "<br>";
echo "Rata-rata Nilai: " . $rata_rata;
?>