<?
# variables
$kual="006.swf";

# comprobando
if(isset($_GET["kual"]))
{$kual=$_GET["kual"];}
else
{$kual="006.swf";}
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
AC_AX_RunContent( 'id','producto/iplm/<?=$kual;?>','width','560','height','403','align','bottom','src','producto/iplm/<?=$kual;?>','bprder','1','quality','high','swliveconnect','true','name','se','wmode','transparent','allowscriptaccess','sameDomain','type','application/x-shockwave-flash','movie','producto/iplm/<?=$kual;?>' ); //end AC code
</script><object id="producto/iplm/<?=$kual;?>" width="560" height="403" align="bottom">
    <param name="allowScriptAccess" value="sameDomain">
    <param name="movie" value="producto/iplm/<?=$kual;?>">
    <param name="quality" value="high">
    <embed src="producto/iplm/<?=$kual;?>" bprder="1" quality="high" width="560" height="403"
    swLiveConnect=true id="posigo" name="se" align="bottom" wmode="transparent"
    allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></object>
    </table></TD>
<TD WIDTH="130PX" bgcolor="#000000" VALIGN="TOP">
    <table align="center" cellpadding="0" cellspacing="0">
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('iplm02.php?kual=006.swf');"><img src="producto/iplm/006.jpg" class="borde1"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('iplm02.php?kual=007.swf');"><img src="producto/iplm/007.jpg" class="borde2"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('iplm02.php?kual=008.swf');"><img src="producto/iplm/008.jpg" class="borde3"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('iplm02.php?kual=009.swf');"><img src="producto/iplm/009.jpg" class="borde4"><br>
    <tr><td style="cursor:hand;filter:alpha(Opacity=50);" onMouseOver="this.filters.alpha.opacity=100;" onMouseOut="this.filters.alpha.opacity=50;"  onclick="location.href('iplm02.php?kual=010.swf');"><img src="producto/iplm/010.jpg" class="borde4"></td>
    </table></TD>
</TABLE>
</body>
</html>
