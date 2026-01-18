<?php
// 1. Membuat struktur Node
class Node {
    public $data;
    public $next;

    public function __construct($nilai) {
        $this->data = $nilai;
        $this->next = null;
    }
}

// 2. Membuat 3 Node secara manual
$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);

// 3. Menghubungkan node (Linking)
$node1->next = $node2; // Node 1 menunjuk ke Node 2
$node2->next = $node3; // Node 2 menunjuk ke Node 3

// 4. Menampilkan seluruh isi Linked List
echo "Isi Linked List: <br>";
$current = $node1; // Dimulai dari Head (Node 1)

while ($current != null) {
    echo $current->data;
    
    // Tambahkan tanda panah jika bukan node terakhir
    if ($current->next != null) {
        echo " -> ";
    }
    
    $current = $current->next; // Pindah ke node selanjutnya
}
?>