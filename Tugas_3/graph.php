<?php
// 1. Membuat Adjacency List untuk Node A, B, C
$graph = [
    "A" => ["B", "C"], // A terhubung ke B dan C
    "B" => [],         // B tidak terhubung ke mana-mana (berdasarkan soal)
    "C" => []          // C tidak terhubung ke mana-mana (berdasarkan soal)
];

// 2. Menampilkan hubungan antar node
echo "<h3>Hubungan Antar Node (Graph):</h3>";

foreach ($graph as $node => $tetangga) {
    echo "Node " . $node . " terhubung ke: ";
    
    if (!empty($tetangga)) {
        // Menggabungkan array tetangga menjadi string yang dipisahkan koma
        echo implode(", ", $tetangga);
    } else {
        echo "(Tidak ada)";
    }
    
    echo "<br>";
}
?>