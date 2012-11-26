<html>
<header>
<script>
var waktunya = 70;
var waktu;
var jalan = 0;
var habis = 0;
function init(){
    checkCookie()
    mulai();
}
function keluar(){
    if(habis==0){
        setCookie('waktux',waktu,365);
    }else{
        setCookie('waktux',0,-1);
    }
}
function mulai(){
    jam = Math.floor(waktu/3600);
    sisa = waktu%3600;
    menit = Math.floor(sisa/60);
    sisa2 = sisa%60
    detik = sisa2%60;
    if(detik<10){
        detikx = "0"+detik;
    }else{
        detikx = detik;
    }
    if(menit<10){
        menitx = "0"+menit;
    }else{
        menitx = menit;
    }
    if(jam<10){
        jamx = "0"+jam;
    }else{
        jamx = jam;
    }
    document.getElementById("divwaktu").innerHTML = jamx+":"+menitx+":"+detikx+" --> "+waktu;
    waktu --;
    if(waktu>0){
        t = setTimeout("mulai()",1000);
        jalan = 1;
    }else{
        if(jalan==1){
            clearTimeout(t);
        }
        habis = 1;
        document.getElementById("formulir").submit();
    }
}
function selesai(){
    document.getElementById("formulir").submit();
}
function getCookie(c_name){
    if (document.cookie.length>0){
        c_start=document.cookie.indexOf(c_name + "=");
        if (c_start!=-1){
            c_start=c_start + c_name.length+1;
            c_end=document.cookie.indexOf(";",c_start);
            if (c_end==-1) c_end=document.cookie.length;
            return unescape(document.cookie.substring(c_start,c_end));
        }
    }
    return "";
}

function setCookie(c_name,value,expiredays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+expiredays);
    document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}

function checkCookie(){
    waktuy=getCookie('waktux');
    if (waktuy!=null && waktuy!=""){
        waktu = waktuy;
    }else{
        waktu = waktunya;
        setCookie('waktux',waktunya,7);
    }
}

</script>
</header>
<body onload=init() onunload=keluar()>
<p>
Waktu anda : <div id=divwaktu></div>
<form action=isinilai.php method=post id=formulir>
<ol>
<?php
include "koneksi.php";
$soal = mysql_query("SELECT * FROM banksoal LIMIT 10"); //mengambil soal 10
$no = 1;
while($s = mysql_fetch_array($soal)){
    echo "<li><b>".$s['pertanyaan']."</b><br>\n";
    echo "<input type=radio name=soal[".$s['soalid']."] value='a'>A. ".$s['pilihan_a']."<br>\n";
    echo "<input type=radio name=soal[".$s['soalid']."] value='b'>B. ".$s['pilihan_b']."<br>\n";
    echo "<input type=radio name=soal[".$s['soalid']."] value='c'>C. ".$s['pilihan_c']."<br>\n";
    echo "<input type=radio name=soal[".$s['soalid']."] value='d'>D. ".$s['pilihan_d']."<br>\n";
    $no++;
}
$jumlahsoal = $no - 1;
echo "<input type=hidden name=jumlahsoal value=$jumlahsoal>";
?>
</ol>
<input type=button value=submit onclick=selesai()>

</form>
</body>
</html>

