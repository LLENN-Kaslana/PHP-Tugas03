<?php
// 1. Inisialisasi Stack kosong
$stack = [];

// 2. Menambahkan data 10, 20, 30 (Push)
array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);

// 3. Menghapus 1 data teratas (Pop)
// Dalam LIFO, data yang terakhir masuk (30) akan dihapus pertama kali
array_pop($stack);

// 4. Menampilkan isi stack
echo "Isi Stack terakhir: <br>";
foreach ($stack as $data) {
    echo $data . "<br>";
}
?>