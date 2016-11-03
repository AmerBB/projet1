<?php 

function conetentMail($message,$name='')
{
	$name = $name ? ' '.$name : '';
	
	return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>DAMART</title>
<style type="text/css">
/*****************************
******** CSS par défaut ******
*****************************/

* {
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
body {
  width: 100%;
  margin: 0px;
  padding: 0px;
}
img {
  outline: none;
  text-decoration: none;
  -ms-interpolation-mode: bicubic;
}
a img {
  border: none;
}
p {
  margin: 0px;
  padding: 0px;
}
tr[class=hide] {
  
  max-height: 0px !important;
  font-size: 0px !important;
  display: none;
  float: left;
  overflow: hidden;
}

@media only screen and (max-width:480px) {
table[id="d_n"], td[id="d_n"], img[id="d_n"] {
  display: none !important;
}
br[class=d_n], table[class=d_n], td[class=d_n], img[class=d_n] {
  display: none !important;
}
table[id="d_b"], td[id="d_b"], span[class="d_b"], img[id="d_b"] {
  display: block !important;
}
table[class="rsz_320"], td[class="rsz_320"], img[class="rsz_320"] {
  width: 320px !important;
  margin: 0 auto !important;
}
* {
  margin: 0px !important;
  padding: 0px !important;
}
td[class=d_b] {
  display: block !important;
  width: 100% !important;
}
td[class=h_41] {
  height: 41px!important;
  background-color: #FFF !important;
}
td[class=h_30] {
  height: 30px!important;
  
}
font[class=f_11] {
  font-size: 11px !important;
}
td[class=h60] {
  height: 60px!important;
}
td[class=w_280] {
  width: 280px !important;
}
td[class=h_70] {
  height: 70px !important;
}
font[class="fs14"] {
  font-size: 14px !important;
  
}

font[class="fs18"] {
  font-size: 18px !important;
  
}
/*****************************
******************************
*****************************/
tr[class=hide] {
  line-height: 18px !important;
  max-height: 1000px !important;
  height: auto !important;
  font-size: auto !important;
  display: block !important;
  float: none !important;
  overflow: visible !important;
}
}
</style>
</head>

<body>
<table width="609" border="0" align="center" cellpadding="0" cellspacing="0" class="rsz_320" style="font-size:0px">
  <tr>
    <td align="center" valign="top"><a href="http://www.damart.fr/toutes-a-vos-imprimes/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_03.jpg" width="160" height="49"  alt="DAMART"/></a></td>
  </tr>
  <tr>
    <td><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_05.jpg" width="100%"  /></td>
  </tr>
  <tr>
    <td><table width="609" border="0" cellspacing="0" cellpadding="0" class="rsz_320">
      <tr>
        <td width="262" valign="top" class="d_n"><a href="http://www.damart.fr/toutes-a-vos-imprimes/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_06.jpg" width="262" height="653"  /></a></td>
        <td valign="top"><table width="320" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="320" valign="top"><a href="http://www.damart.fr/toutes-a-vos-imprimes/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_07.jpg" alt="En boutique &amp; sur Damart.fr toutes &agrave; vos imprim&eacute;s ! du 22 au 25 avril" width="320" height="172"  /></a></td>
          </tr>
          <tr>
            <td><table width="320" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="9" height="114">&nbsp;</td>
                <td valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="35" align="left" valign="top"><font style="font-size:14px" size="2" face="Arial, Helvetica, sans-serif" color="#000000">Bonjour'. $name .',</font></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><font style="font-size:14px;line-height:16px" size="2" face="Arial, Helvetica, sans-serif" color="#000000">'. $message .'</font></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="320" valign="top"><a href="http://www.damart.fr/toutes-a-vos-imprimes/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_12.jpg" width="320" height="241"  alt="Envoyez une photo de vous en portant un imprim&eacute; et profitez de -30%*  sur tous vos achats"/></a></td>
          </tr>
          <tr>
            <td width="285" height="126" align="center" valign="top"><a href="http://www.damart.fr/toutes-a-vos-imprimes/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_14.jpg" width="285" height="43"  alt="JE PARTICIPE"/></a></td>
          </tr>
        </table></td>
        <td width="27" valign="top" class="d_n">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="609" valign="top"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/img_damart_email_partage_17.jpg" width="100%"  /></td>
  </tr>
  <tr>
    <td width="10" align="center" valign="top"><table width="609" border="0" cellspacing="0" cellpadding="0" class="rsz_320">
      <tr>
        <td height="71" align="center" valign="top"><font style="font-size:11px" size="2" face="Arial, Helvetica, sans-serif" color="#000000">* R&eacute;duction de 30% sur tous vos achats si vous portez un v&ecirc;tement ou un accessoire imprim&eacute;, valable du<br class="d_n">
          22/04/2016 au 25/04/2016 inclus, en boutique ou sur damart.fr, non cumulable avec d\'autres r&eacute;ductions et offres <br class="d_n">
          promotionnelles. Ne peut &ecirc;tre d&eacute;duit d\'une commande en cours, ni faire l\'objet d\'une contrepartie mon&eacute;taire. </font></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>

</table>
</body>
</html>';
}

function conetentMailParticipation($name, $message, $code)
{ 
return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>DAMART</title>
<style type="text/css">
/*****************************
******** CSS par défaut ******
*****************************/

* {
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
body {
  width: 100%;
  margin: 0px;
  padding: 0px;
}
img {
  outline: none;
  text-decoration: none;
  -ms-interpolation-mode: bicubic;
}
a img {
  border: none;
}
p {
  margin: 0px;
  padding: 0px;
}
tr[class=hide] {
  
  max-height: 0px !important;
  font-size: 0px !important;
  display: none;
  float: left;
  overflow: hidden;
}

@media only screen and (max-width:480px) {
table[id="d_n"], td[id="d_n"], img[id="d_n"] {
  display: none !important;
}
br[class=d_n], table[class=d_n], td[class=d_n], img[class=d_n] {
  display: none !important;
}
table[id="d_b"], td[id="d_b"], span[class="d_b"], img[id="d_b"] {
  display: block !important;
}
table[class="rsz_320"], td[class="rsz_320"], img[class="rsz_320"] {
  width: 320px !important;
  margin: 0 auto !important;
}
* {
  margin: 0px !important;
  padding: 0px !important;
}
td[class=d_b] {
  display: block !important;
  width: 100% !important;
}
td[class=h_41] {
  height: 41px!important;
  background-color: #FFF !important;
}
td[class=h_30] {
  height: 30px!important;
  
}
font[class=f_11] {
  font-size: 11px !important;
}
td[class=h60] {
  height: 60px!important;
}
td[class=w_280] {
  width: 280px !important;
}
td[class=h_70] {
  height: 70px !important;
}
font[class="fs14"] {
  font-size: 14px !important;
  
}

font[class="fs18"] {
  font-size: 18px !important;
  
}
/*****************************
******************************
*****************************/
tr[class=hide] {
  line-height: 18px !important;
  max-height: 1000px !important;
  height: auto !important;
  font-size: auto !important;
  display: block !important;
  float: none !important;
  overflow: visible !important;
}
}
</style>
</head>

<body>
<table width="609" border="0" align="center" cellpadding="0" cellspacing="0" class="rsz_320" style="font-size:0px" >
  <tr>
    <td align="center" valign="top"><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_03.jpg" width="160" height="49"  alt="DAMART"/></a></td>
  </tr>
  <tr>
    <td><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_05.jpg" width="100%"  /></td>
  </tr>
  <tr>
    <td><table width="609" border="0" cellspacing="0" cellpadding="0" class="rsz_320">
      <tr>
        <td width="262" valign="top" class="d_n" ><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_08.jpg" width="262" height="653"  /></a></td>
        <td valign="top"><table width="320" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="320" valign="top"><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_09.jpg" alt="En boutique &amp; sur Damart.fr Toutes &agrave; vos imprim&eacute;s ! du 22 au 25 avril " width="320" height="171"  /></a></td>
          </tr>
          <tr>
            <td><table width="320" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="9" height="90">&nbsp;</td>
                <td valign="top"><table width="311" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="36" align="left" valign="top"><font style="font-size:14px" size="2" face="Arial, Helvetica, sans-serif" color="#000000">Bonjour '. $name .',</font></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><font style="font-size:14px;line-height:16px" size="2" face="Arial, Helvetica, sans-serif" color="#000000">'.$message.'</font></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="320" valign="top"><a href="http://www.damart.fr/"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_13.jpg" width="320" height="251"  alt="Vous pouvez d&egrave;s maintenant profiter de -30%* sur tous vos achats "/></a></td>
          </tr>
          <tr>
            <td width="285" align="center" valign="top"><table width="320" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="14"><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation__14.jpg" width="14" height="24"  alt="JE PARTICIPE"/></a></td>
                <td width="152" align="right" valign="middle"><font style="font-size:16px" size="3" face="Arial, Helvetica, sans-serif" color="#000000"><strong>AVEC LE CODE</strong></font></td>
                <td width="9">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#000000"><font style="font-size:16px" size="3" face="Arial, Helvetica, sans-serif" color="#ffffff"><strong>'.$code.'</strong></font></td>
                <td width="62"><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation__18.jpg" width="62" height="24"  alt="JE PARTICIPE"/></a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="285" align="center" valign="top"><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation__19.jpg" width="320" height="18"  alt="JE PARTICIPE"/></a></td>
          </tr>
          <tr>
            <td width="285" align="center" valign="top"><a href="http://www.damart.fr/" target="_blank"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_20.jpg" width="320" height="46"  alt="JE PARTICIPE"/></a></td>
          </tr>
          <tr>
            <td width="285" height="53" align="center" valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="27" valign="top" class="d_n">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/damart-email-confirmation_22.jpg" width="100%"  /></td>
  </tr>
  <tr>
    <td width="10" align="center" valign="top"><table width="609" border="0" cellspacing="0" cellpadding="0" class="rsz_320">
      <tr>
        <td height="70" align="center" valign="top"><font style="font-size:11px" size="2" face="Arial, Helvetica, sans-serif" color="#000000">* R&eacute;duction de 30% sur tous vos achats si vous portez un v&ecirc;tement ou un accessoire imprim&eacute;, valable du<br class="d_n">
          22/04/2016 au 25/04/2016 inclus, en boutique ou sur damart.fr, non cumulable avec d\'autres r&eacute;ductions et offres <br class="d_n">
          promotionnelles. Ne peut &ecirc;tre d&eacute;duit d\'une commande en cours, ni faire l\'objet d\'une contrepartie mon&eacute;taire. </font></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>

</table>
</body>
</html>
';
}

function contentEmailInscription($name, $email)
{
$db = $GLOBALS['$db'] ;

$emailing = $db->prepare("SELECT * FROM pages where page='$email' ");
$emailing->execute(); 
$content = $emailing->fetch(); 

function br2nl($text){ 
 
  $text = str_replace(array('<br>', '<br />'), "\n", $text);
 
  return $text;
 
}
foreach ($content as $key => $value) {
      $content[$key] = nl2br( htmlentities( br2nl($value) ) );
} 

return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>email jeu</title>

<style type="text/css">
/* Basics */ 
body {
  margin: 0 !important;
  padding: 0;
  background-color: #ffffff; }

table {
  border-spacing: 0;
  font-family: sans-serif;
  }

td {
  padding: 0; }

img {
  border: 0;
  display: block; }

 
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:0px;">
  <tr>
    <td align="center"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/logo_damart.jpg" width="177" height="103" alt="" /></td>
      </tr>
      <tr>
        <td><img border="0" style="display:block;" src="http://damart.e-i.ma/damart/email/images/'. $content['champ2'] .'" width="600" alt=""  /></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="32">&nbsp;</td>
            <td align="center"><strong><font face="Arial, Helvetica, sans-serif" size="3" style="font-size:16px;" color="#4a4a44">Bonjour '.$name.',</font></strong></td>
            <td width="32">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" height="15" style="line-height:0px;font-size:0px;"></td>
            <td align="center" height="15" style="line-height:0px;font-size:0px;"></td>
            <td align="center" height="15" style="line-height:0px;font-size:0px;"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center"><font face="Arial, Helvetica, sans-serif" size="3" style="font-size:14px;" color="#4a4a44">'. $content['champ3'] .'</font></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="22">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/'. $content['champ4'] .'" width="513" alt="" /></td>
      </tr>
      <tr>
        <td height="32">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><table border="0" cellspacing="0" cellpadding="0" style="background: '. $content['champ5'] .'" bgcolor="'. $content['champ5'] .'" align="center">
          <tr>
             <td width="15"></td>
            <td height="50" align="center" valign="middle"><strong><a href="'. $content['champ6'] .'" target="_blank" style="text-decoration:none"><font face="Arial, Helvetica, sans-serif" size="3" style="font-size:16px;" color="'.$content['champ9'].'">'.$content['champ8'].'</font></a></strong></td>
             <td width="15"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="51">&nbsp;</td>
      </tr>
      <tr>
        <td><img border="0" style="display:block" src="http://damart.e-i.ma/damart/email/images/1-template-email-jeu_14.jpg" width="100%" alt="" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="32">&nbsp;</td>
            <td align="center"><font face="Arial, Helvetica, sans-serif" size="3" style="font-size:11px;" color="#4a4a44">'. $content['champ7'] .' </font></td>
            <td width="32">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
      </tr>
    
    </table></td>
  </tr>
</table>
</body>
</html>';


}

 ?>