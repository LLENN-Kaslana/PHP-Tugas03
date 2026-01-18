<?php
// 1. Inisialisasi Queue kosong
$queue = [];

// 2. Menambahkan data A, B, C (Enqueue)
array_push($queue, "A");
array_push($queue, "B");
array_push($queue, "C");

// 3. Menghapus 1 data paling depan (Dequeue)
// Dalam FIFO, data yang pertama masuk ("A") akan dihapus pertama kali
array_shift($queue);

// 4. Menampilkan isi queue
echo "Isi Queue sekarang: <br>";
foreach ($queue as $data) {
    echo $data . "<br>";
}
?>