<?php
$program = "<h4>=== Program Biodata Sederhana Function ===</h4>";
$nama = "Salma Aisyah";
$umur = 16;
$kelas = "X RPL 2";
$tempat = "Jakarta, 30 April 2008 ";
$nomor = "028894476";
$alamat = "Jalan Abdul muis ";


$alamat = "Jl. Abdul Muis No.44, Jakarta Pusat";
 function myBiodata (){
   global $program, $nama, $umur, $kelas, $tempat, $nomor, $alamat;
   echo "$program <br/>";
   echo "Nama Lengkap : $nama <br/>";
   echo "Umur : $umur <br/>";
   echo "Kelas : $kelas <br/>";
   echo "Tempat/ Tanggal Lahir : $tempat<br/>";
   echo "Nomor WA : $nomor<br/>";
   echo "Alamat : $alamat<br/>";
}
echo myBiodata ()










?>