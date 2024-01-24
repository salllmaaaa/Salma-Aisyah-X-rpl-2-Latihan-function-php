<?php

function hitungBiayaSPP($nama, $kelas, $kategori, $biayaSPP, $tunggakanBulan)
{
    $diskonPersen = ($kategori == "Beasiswa" && $tunggakanBulan < 6) ? 50 : 0;
    $denda = ($tunggakanBulan >= 6) ? 100000 : 0;

    $diskon = $biayaSPP * ($diskonPersen / 100);
    $totalSPP = $biayaSPP * $tunggakanBulan - $diskon + $denda;
    
    $status = ($totalSPP > 0) ? "<span style='color: yellow;'>Belum Lunas</span>" : "<span style='color: green;'>Sudah Lunas (Hijau)</span>";
    if ($tunggakanBulan >= 6) {
        $status = "<span style='color: red;'>Menunggak Terlalu Lama</span>";
    }

    echo "=== Program SPP Sederhana ===<br>";
    echo "Nama Lengkap : $nama<br>";
    echo "Kelas : $kelas<br>";
    echo "Kategori : $kategori<br>";
    echo "Biaya SPP : Rp $biayaSPP<br>";
    echo "Tunggakan SPP : $tunggakanBulan bulan<br>";

    if ($diskon > 0) {
        echo "Discount $diskonPersen% : Rp $diskon<br>";
    }
    
    if ($denda > 0) {
        echo "Denda : Rp $denda<br>";
    }

    echo "Total yang harus dibayar : Rp $totalSPP<br>";
    echo "Status : $status<br>";
}


hitungBiayaSPP("Salma Aisyah", "X RPL 2", "Beasiswa", 700000, 3);

?>