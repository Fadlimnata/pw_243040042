<?php
// Membuat array dengan 6 elemen awal
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

// Menampilkan daftar awal
echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";

// Menambahkan 2 elemen baru ke dalam array
array_push($hardware, "Card Reader", "Modem");

// Mengurutkan array secara alfabetis (A-Z)
sort($hardware);

// Menampilkan daftar setelah ditambahkan elemen baru dan diurutkan
echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ol>";
foreach ($hardware as $item) {

    echo "<li>$item</li>";
}
echo "</ol>";
