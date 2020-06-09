<?
# variables
$kual="ld001.swf";

# comprobando
if(isset($_GET["kual"]))
{$kual=$_GET["kual"];}
else
{$kual="ld001.swf";}
?>
<html>
<head>
    <title></title>
    
    <script language=JavaScript>
<!--
var message="";

function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" bgcolor="000000">
<TABLE CELLPADDING="0" CELLSPACING="0" width="690" HEIGHT="403PX"><TR>
<TD WIDTH="560PX" align="center" valign="top">
    <table cellpadding="0" cellspacing="0">
    <tr><td class="borde1">
    <script type="text/javascript">
AC_AX_RunContent( 'id','producto/ld/<?=$kual;?>','width','560','height','403','align','bottom','src','producto/ld/<?=$kual;?>','bprder','1','quality','high','swliveconnect','true','name','se','wmode','transparent','allowscriptaccess','sameDomain','type','application/x-shockwave-flash','movie','producto/ld/<?=$kual;?>' ); //end AC code
</script><object id="producto/ld/<?=$kual;?>" width="560" height="403" align="bottom">
    <param name="allowScriptAccess" value="sameDomain">
    <param name="movie" value="producto/ld/<?=$kual;?>">
    <param name="quality" value="high">
    <embed src="producto/ld/<?=$kual;?>" bprder="1" quality="high" width="560" height="403"
    swLiveConnect=true id="posigo" name="se" align="bottom" wmode="transparent"
    allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></object>
    </table></TD>
<TD WIDTH="130PX" bgcolor="#000000" VALIGN="TOP">
    <table align="center" cellpadding="0" cellspacing="0">
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('ld.php?kual=ld001.swf');"><img src="producto/ld/ldp001.jpg" class="borde1"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('ld.php?kual=ld002.swf');"><img src="producto/ld/ldp002.jpg" class="borde2"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('ld.php?kual=ld003.swf');"><img src="producto/ld/ldp003.jpg" class="borde3"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('ld.php?kual=ld004.swf');"><img src="producto/ld/ldp004.jpg" class="borde4"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('ld.php?kual=ld005.swf');"><img src="producto/ld/ldp005.jpg" class="borde4"></td>
    </table></TD>
</TABLE>
</body>
</html>
