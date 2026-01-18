<?php
// 1. Mendefinisikan struktur Node
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($nilai) {
        $this->data = $nilai;
        $this->left = null;
        $this->right = null;
    }
}

// 2. Membuat 1 Root, 1 Child Kiri, dan 1 Child Kanan
$root = new Node("Akar (Root)");
$root->left = new Node("Anak Kiri");
$root->right = new Node("Anak Kanan");

// 3. Menampilkan semua data menggunakan fungsi rekursif
function tampilkanSemua($node) {
    if ($node != null) {
        echo $node->data . "<br>"; // Tampilkan data node saat ini
        tampilkanSemua($node->left); // Cek ke cabang kiri
        tampilkanSemua($node->right); // Cek ke cabang kanan
    }
}

echo "Daftar Seluruh Data Tree: <br>";
tampilkanSemua($root);
?>