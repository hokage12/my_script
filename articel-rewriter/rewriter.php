<?php
if($_POST['artikel']){
include "koneksi.php";
$artikel = nl2br($_POST['artikel']);

//kita pisahkan kalimat berdasarkan spasi
//untuk mengambil kata-kata
$ar = explode(" ",$artikel);

$hasil = "";
foreach($ar as $value){
    if(!preg_match("/\.|'/",$value)){
        //kita cari kata-kata tersebut di database MySQL
        $cari = mysql_query("select * from sinonim where kata1='$value'");
        $j = mysql_num_rows($cari);
        if($j>0){
            $ka = mysql_fetch_array($cari);
            $hasil = $hasil."<span class='re'>".stripslashes($ka['kata2'])."</span> ";
        }else{
            $cari2 = mysql_query("select * from sinonim where kata2='$value'");
            $j2 = mysql_num_rows($cari2);
            if($j2>0){
                $ka2 = mysql_fetch_array($cari2);
                $hasil = $hasil."<span class='re'>".stripslashes($ka2['kata1'])."</span> ";
            }else{
                $hasil = $hasil.stripslashes($value)." ";
            }
        }
    }else{
        $ka = preg_replace("/\./","",$value);
        $cari = mysql_query("select * from sinonim where kata1='$ka'");
        $j = mysql_num_rows($cari);
        if($j>0){
            $kax = mysql_fetch_array($cari);
            $hasil = $hasil."<span class='re'>".stripslashes($kax['kata2'])."</span>. ";
        }else{
            $hasil = $hasil.stripslashes($ka).". ";
        }
    }
}
echo $hasil;
}
?>
