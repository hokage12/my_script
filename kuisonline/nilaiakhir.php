<?php
echo "Nama: ".$_POST['nama']."<br>";
$jumlahbenar = 0;
$i = 1;
foreach($_POST['pilihan'] as $key => $value){
    if($value == $_POST['jawaban'][$key]){
        $j = "benar";
        $jumlahbenar++;
    }else{
        $j = "<font color='red'>salah</font>";
    }
    echo "No $i : $value ($j)<br>";
    $i++;
}
echo "Jumlah benar = $jumlahbenar";
?>
