<?php
include "koneksi.php";
$benar = 0;
$salah = 0;
if($_POST['soal']){
foreach($_POST['soal'] as $key => $value){
    $cek = mysql_query("SELECT * FROM banksoal WHERE soalid=$key");
    while($c = mysql_fetch_array($cek)){
        $jawaban = $c['jawaban'];
    }
    if($value==$jawaban){
        $benar++;
    }else{
        $salah++;
    }
}
$jumlah = $_POST['jumlahsoal'];
$tidakjawab = $jumlah - $benar - $salah;
echo "Benar = $benar <br>";
echo "Salah = $salah <br>";
echo "Tidak jawab = $tidakjawab";
}
?>
