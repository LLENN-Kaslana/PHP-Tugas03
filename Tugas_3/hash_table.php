<?php
// 1. Inisialisasi Hash Table menggunakan Array Asosiatif
// Key: NIM, Value: Nama Mahasantri
$mahasantri = [
    "2024001" => "Ahmad Fauzi",
    "2024002" => "Siti Aminah",
    "2024003" => "Budi Rahardjo"
];

// 2. Menambahkan data baru ke dalam Hash Table
$mahasantri["2024004"] = "Dewi Lestari";

// 3. Menampilkan seluruh data
echo "<h3>Daftar Mahasantri (Hash Table):</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>NIM (Key)</th>
        <th>Nama Mahasantri (Value)</th>
      </tr>";

foreach ($mahasantri as $nim => $nama) {
    echo "<tr>";
    echo "<td>" . $nim . "</td>";
    echo "<td>" . $nama . "</td>";
    echo "</tr>";
}

echo "</table>";
?>