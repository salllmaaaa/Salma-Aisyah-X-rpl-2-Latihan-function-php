<?php
function pengulanganAngkot ($noAngkot, $kondisiTerminasi,){
    for ($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
        if ($noAngkot ==1|| $noAngkot ==3 || $noAngkot==10 || $noAngkot == 11){
            echo " Angkot no - $noAngkot tersedia <br/>";
        }else if ($noAngkot == 2|| $noAngkot ==9|| $noAngkot ==12|| $noAngkot ==17){
            echo " Angkot no - $noAngkot sedang diperbaiki  <br/>";
        }else {
            echo "Angkot no - $noAngkot tidak tersedia <br/>" ;}
    }
}
echo pengulanganAngkot (1, 3, 10, 11, 2, 9, 12, 17)
?>