<html>
<head>
<title>
Free Articel Rewriter
</title>
<meta name="keywords" content="Free Articel Rewriter">
<script type="text/javascript" src="jquery-1.4.4.min.js"></script>
<script>
$(document).ready(function(){
    $("#tombol").click(function(){
        //menampilkan animasi loading
        $("#loading").show();
        
        //mengambil teks dari textarea
        var artikel = $("#artikel").val();
        
        //kirim teks artikel ke server
        $.ajax({
            type: "POST",
            url: "rewriter.php",
            data: "artikel="+artikel,
            success: function(msg){
                //jika sudah dikirim ditampilkan
                $("#re-articel").html(msg);
                $("#loading").hide();
            }
        });
    });
    
    $("#reset").click(function(){
        $("#re-articel").html("");
    });
});
</script>
<style>
.re{background-color:yellow}
</style>
</head>
<body>
<center>
<h1>Free Articel Rewriter</h1>
<form>
<script type="text/JavaScript">


/***********************************************
* Form Field Progress Bar- By Ron Jonk- http://www.euronet.nl/~jonkr/
* Modified by Dynamic Drive for minor changes
* Script featured/ available at Dynamic Drive- http://www.dynamicdrive.com
* Please keep this notice intact
***********************************************/

function textCounter(field,counter,maxlimit,linecounter) {
    // text width//
    var fieldWidth =  parseInt(field.offsetWidth);
    var charcnt = field.value.length;

    // trim the extra text
    if (charcnt > maxlimit) {
        field.value = field.value.substring(0, maxlimit);
    }

    else {
    // progress bar percentage
    var percentage = parseInt(100 - (( maxlimit - charcnt) * 100)/maxlimit) ;
    document.getElementById(counter).style.width =  parseInt((fieldWidth*percentage)/100)+"px";
    document.getElementById(counter).innerHTML="Limit: "+percentage+"%"
    // color correction on style from CCFFF -> CC0000
    setcolor(document.getElementById(counter),percentage,"background-color");
    }
}

function setcolor(obj,percentage,prop){
    obj.style[prop] = "rgb(80%,"+(100-percentage)+"%,"+(100-percentage)+"%)";
}

</script>
Max 1000 Characters<br>
<textarea rows="10" cols="80" name="komentar" id="artikel"
onKeyDown="textCounter(this,'progressbar1',1000)"
onKeyUp="textCounter(this,'progressbar1',1000)"
onFocus="textCounter(this,'progressbar1',1000)" ></textarea><br />

<div id="progressbar1" class="progress"></div>

<script>textCounter(document.getElementById("artikel"),"progressbar1",1000)</script><br>
<input type=button value="rewrite" id=tombol>
<input type=reset id="reset">
</form>
<b>Result:</b>
<br>
<img src="ajax-loader.gif" style="display:none" id="loading">
<br>
<div id="re-articel" style="width:650;height:200;border:black 1px solid;text-align:left;padding:10;overflow:auto">
</div>
</body>
</html>
