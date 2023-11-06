<?php
echo '<strong>SOAL C<br></strong>';
$produk = array(
    array('Nama' => 'Baju Bayi', 'Stok' => 1, 'Harga' => 35500),
    array('Nama' => 'Diapers', 'Stok' => 3, 'Harga' => 51000),
    array('Nama' => 'Bedak', 'Stok' => 1, 'Harga' => 15000),
    array('Nama' => 'Minyak Telon', 'Stok' => 2, 'Harga' => 30000)
);
$jumlahPembelian = 0;
echo 'Tanggal Transaksi: 06 November 2023<br>';
echo '<table border="1">';
echo '<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th><th>Total Harga</th></tr>';
foreach ($produk as $item) {
    $namaProduk = $item['Nama'];
    $hargaProduk = $item['Harga'];
    $jumlah = $item['Stok'];
    $totalHarga = $hargaProduk * $jumlah;
    
    echo '<tr>';
    echo '<td>' . $namaProduk . '</td>';
    echo '<td>' . $jumlah . '</td>';
    echo '<td>Rp ' . number_format($hargaProduk, 0, ',', '.') . '</td>';
    echo '<td>Rp ' . number_format($totalHarga, 0, ',', '.') . '</td>';
    echo '</tr>';
    
    $jumlahPembelian += $totalHarga;
}
echo '</table>';
echo 'Total: Rp ' . number_format($jumlahPembelian, 0, ',', '.') . '<br>';
$diskon = 0;
if ($jumlahPembelian >= 200000) {
    $diskon = 0.2; 
} elseif ($jumlahPembelian >= 150000) {
    $diskon = 0.1; 
}
$totalPembayaran = $jumlahPembelian * (1 - $diskon);
echo 'Diskon: ' . ($diskon * 100) . '%<br>';
echo 'Total Pembayaran: Rp ' . number_format($totalPembayaran, 0, ',', '.');
?>