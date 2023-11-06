<?php
$tabel_harga_barang = array(
    1 => array("Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30000, "Jumlah" => 0),
    2 => array("Produk" => "Diapers", "Stok" => 15, "Harga" => 51000, "Jumlah" => 0),
    3 => array("Produk" => "Baby Oil", "Stok" => 10, "Harga" => 16000, "Jumlah" => 0),
    4 => array("Produk" => "Shampo Baby", "Stok" => 18, "Harga" => 20000, "Jumlah" => 0),
    5 => array("Produk" => "Bedak", "Stok" => 15, "Harga" => 15000, "Jumlah" => 0),
    6 => array("Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35500, "Jumlah" => 0),
    7 => array("Produk" => "Jumper", "Stok" => 25, "Harga" => 50000, "Jumlah" => 0)
);

// Daftar produk yang dibeli oleh pelanggan beserta jumlahnya
$produk_dibeli = array(
    array("Produk" => "Baju Bayi", "Jumlah" => 1),
    array("Produk" => "Diapers", "Jumlah" => 3),
    array("Produk" => "Bedak", "Jumlah" => 1),
    array("Produk" => "Minyak Telon", "Jumlah" => 2)
);

$total_pembelian = 0;

// Menghitung total pembelian
foreach ($produk_dibeli as $item) {
    foreach ($tabel_harga_barang as $produk) {
        if ($produk["Produk"] === $item["Produk"]) {
            $total_pembelian += $produk["Harga"] * $item["Jumlah"];
        }
    }
}

// Menghitung diskon
$diskon = 0;
if ($total_pembelian >= 200000) {
    $diskon = 0.20; // Diskon 20% jika total lebih dari atau sama dengan 200,000
} elseif ($total_pembelian >= 150000) {
    $diskon = 0.10; // Diskon 10% jika total lebih dari atau sama dengan 150,000
}

// Total pembayaran setelah diskon
$total_setelah_diskon = $total_pembelian * (1 - $diskon);
$jumlah_diskon = $total_pembelian * $diskon;

// Menampilkan hasil
echo "Tabel Harga Barang<br>";
echo "ID\tProduk\tStok\tHarga<br>";
foreach ($tabel_harga_barang as $key => $item) {
    echo ($key) . "\t" . $item["Produk"] . "\t" . $item["Stok"] . "\t" . number_format($item["Harga"], 0, ".", ",") . "<br>";
}

echo "<br>Tanggal Transaksi: 06 November 2023<br>";
echo "Produk:<br>";
foreach ($produk_dibeli as $item) {
    foreach ($tabel_harga_barang as $produk) {
        if ($produk["Produk"] === $item["Produk"]) {
            $subtotal = $produk["Harga"] * $item["Jumlah"];
            echo "{$produk['Produk']} ({$item['Jumlah']}X" . number_format($produk["Harga"], 0, ".", ",") . "): " . number_format($subtotal, 0, ".", ",") . "<br>";
        }
    }
}

echo "<br>Total Pembelian: " . number_format($total_pembelian, 0, ".", ",") . "<br>";
echo "Diskon: " . number_format($diskon * 100, 0) . "%<br>";
echo "Total Pembayaran: " . number_format($total_setelah_diskon, 0, ".", ",");
echo "Harga Diskon: " . number_format($jumlah_diskon, 0, ".", ",") . "<br>";



?>