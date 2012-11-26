<?php
include "koneksi.php";
$topik = $_GET['topik'];
$data = mysql_query("SELECT * FROM banksoal WHERE topik='$topik'");

$json = '{"soal":[ ';
while($x = mysql_fetch_array($data)){
    $json .= '{';
    $json .= '"id":"'.$x['soalid'].'",
        "topik":"'.htmlspecialchars($x['topik']).'",
        "pertanyaan":"'.htmlspecialchars($x['pertanyaan']).'",
        "a":"'.$x['pilihan_a'].'",
        "b":"'.$x['pilihan_b'].'",
        "c":"'.$x['pilihan_c'].'",
        "d":"'.$x['pilihan_d'].'",
        "jawaban":"'.$x['jawaban'].'"
    },';
}
$json = substr($json,0,strlen($json)-1);
$json .= ']';

$json .= '}';
echo $json;

?>
