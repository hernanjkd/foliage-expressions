<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html> 
<head> 
    <title></title> 
    <script LANGUAGE="JavaScript">

var pagina="index.html"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 3000);

</script>
</head> 

<body bgcolor="#black">

<? 
if (!$HTTP_POST_VARS){ 
?> 
<FORM action="form.php" method=post>
		<font color="#FFFFFF"> 
      	</font> 
      <TABLE height=327 cellSpacing=0 cellPadding=0 width=500 align=center 
      border=0 id="table1">
        <TBODY>
        <TR>
          <TD align=right width=169 height=27><font color="#FFFFFF">Name:</font></TD>
          <TD width=331><font color="#FFFFFF"><INPUT name=nombre id=Fname style="MARGIN-LEFT: 10px" size=30 
            ></font></TD></TR>
        <TR>
          <TD align=right><font color="#FFFFFF">Type of project: </font> </TD>
          <TD><font color="#FFFFFF"><SELECT id=project style="MARGIN-LEFT: 10px" name=project> 
              <OPTION value="Select One" selected>Select One</OPTION> <OPTION 
              value=Landscaping>Landscaping</OPTION> <OPTION 
              value="Hardscape Design">Hardscape Design</OPTION> <OPTION 
              value=Lighting>Lighting</OPTION> <OPTION value="Pool Design">Pool 
              Design</OPTION> <OPTION value="Complete Site Design">Complete Site 
              Design</OPTION> <OPTION value=Other>Other</OPTION></SELECT> </font> </TD></TR>
        <TR>
          <TD vAlign=top align=right><font color="#FFFFFF">Explain:</font></TD>
          <TD><font color="#FFFFFF"><TEXTAREA id=explain style="MARGIN-LEFT: 10px" name=explain rows=4 cols=30></TEXTAREA></font></TD></TR>
        <TR>
          <TD align=right height=26><font color="#FFFFFF">Phone Number:
			</font> </TD>
          <TD><font color="#FFFFFF"><INPUT id=phone1 style="MARGIN-LEFT: 10px" size=30 
          name=phone1></font></TD></TR>
        <TR>
          <TD align=right height=26><font color="#FFFFFF">Best time to contact you:
			</font> </TD>
          <TD><font color="#FFFFFF"><INPUT id=contacttime style="MARGIN-LEFT: 10px" size=30 
            name=contacttime></font></TD></TR>
        <TR>
          <TD align=right height=27><font color="#FFFFFF">City you reside in:
			</font> </TD>
          <TD><font color="#FFFFFF"><INPUT id=cityin style="MARGIN-LEFT: 10px" size=30 
          name=cityin></font></TD></TR>
        <TR>
          <TD align=right><font color="#FFFFFF">Email:</font></TD>
          <TD><font color="#FFFFFF"><INPUT id=email style="MARGIN-LEFT: 10px" size=30 
        name=email></font></TD></TR>
        <TR>
          <TD vAlign=top align=right><font color="#FFFFFF">Additional comments:
			</font> </TD>
          <TD><font color="#FFFFFF"><TEXTAREA id=comments style="MARGIN-LEFT: 10px" name=comments rows=4 cols=30></TEXTAREA></font></TD></TR></TBODY></TABLE>
      <P align=center><font color="#FFFFFF"><INPUT type=submit value=Submit name=Submit></font></P></FORM>
<? 
}else{ 
    //Estoy recibiendo el formulario, compongo el cuerpo 
    $cuerpo = "Formulario enviado\n\n"; 
    $cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . "\n\n"; 
    $cuerpo .= "Project: " . $HTTP_POST_VARS["project"] . "\n\n";
    $cuerpo .= "Explain: " . $HTTP_POST_VARS["explain"] . "\n\n";
    $cuerpo .= "Phone: " . $HTTP_POST_VARS["phone1"] . "\n\n";
    $cuerpo .= "Contact Time: " . $HTTP_POST_VARS["contacttime"] . "\n\n";
    $cuerpo .= "City: " . $HTTP_POST_VARS["cityin"] . "\n\n";
    $cuerpo .= "Email: " . $HTTP_POST_VARS["email"] . "\n\n";
    $cuerpo .= "Comments: " . $HTTP_POST_VARS["comments"] . "\n\n"; 

    //mando el correo... 
    mail("guillesala@hotmail.com","Formulario recibido",$cuerpo); 

    //doy las gracias por el envío 
    echo "Thank you for completing the form. It has been submitted."; 
} 
?> 
</body> 
</html> 

