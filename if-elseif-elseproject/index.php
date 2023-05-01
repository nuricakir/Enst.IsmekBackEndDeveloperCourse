<?php

// Enstitü İSMEK Back-End Developer Kursu
// 1. Hafta
// If (Eğer) Kontrol Deyimi ile İşlemler
// If, Elseif, Else

$degisken1 = 25;
$degisken2 = 45;
$degisken3 = 30;

    if ( $degisken1 < $degisken2 && $degisken2 > $degisken3 ){
        echo "En büyük değer $degisken2 'dir.";
        // Değişken1 ve Değişken3 değerlerinin Değişken2'den küçük olması durumunda 
    }
    elseif (  $degisken2 < $degisken3 && $degisken3 > $degisken1){
        echo "En büyük değer $degisken3 'dir.";
        // Değişken1 ve Değişken2 değerlerinin Değişken3'den küçük olması durumunda 
    }
    else{
        echo "En büyük değer $degisken1 'dir.";
        // Hiçbiri değilse 
    }
?>

