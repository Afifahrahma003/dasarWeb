<?php
 
// //  Soal 
// function perkenalan() {
//    echo "Assalamualaikum, ";
//    echo "Perkanalkan, Nama Saya Afifah <br/>";
//    echo "Senang berkenalan dengan Anda <br/>";
// }

//     // Memanggil fungsi yang sudah dibuat
//    perkenalan();


//   soal no 5
// function perkenalan($nama, $salam){
//    echo $salam.", ";
//    echo "Perkenalkan, nama saya ".$nama."<br/>";
//    echo "Senang berkenalan dengan Anda<br/>";
//    }

//    perkenalan("Hamdana","Hallo");

//    echo "<hr>";

//    $saya = "Afifah Rahma ";
//    $ucapanSalam = "Selamat pagi";

//    perkenalan($saya,$ucapanSalam);


// soal no 6
//  function perkenalan($nama, $salam="Assalamualaikum"){
//      echo $salam.", ";
//      echo "Perkenalkan, nama saya ".$nama."<br/>";
//      echo "Senang berkenalan dengan Anda<br/>";
//  }

//  perkenalan("Hamdana","Hallo");

//  echo "<hr>";

//  $saya = "Afifah";
//  $ucapanSalam = "Selamat pagi";

//  perkenalan($saya);
    

// // soal no 7
// function hitungUmur($thn_lahir, $thn_sekarang){
//         $umur = $thn_sekarang - $thn_lahir;
//         return $umur;
//     }
    
//     echo "Umur saya adalah ". hitungUmur(2003, 2024). " tahun";

// // soal no 8
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia " . hitungUmur(2003, 2024) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Afifah");

    ?>

