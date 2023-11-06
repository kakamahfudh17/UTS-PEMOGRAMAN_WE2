<?php
echo '<strong>SOAl A <br></strong>';
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$barang = array(
    array(1, "Minyak Telon", 20, 30000),
    array(2, "Diapers", 15, 51000),
    array(3, "Baby Oil", 10, 16000),
    array(4, "Shampo Baby", 18, 20000),
    array(5, "Bedak", 15, 15000),
    array(6, "Baju Bayi", 20, 35000),
    array(7, "Jumper", 25, 50000),
);

$tal_Jum = 0; 

foreach($barang as $row) {
    echo "<tr>";
    $juml = $row[2] * $row[3]; 
    $tal_Jum += $juml; 
    $row[] = $juml; 
    foreach($row as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

echo "</table>";



?>