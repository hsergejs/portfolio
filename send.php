

<? 

if (isset($_POST['sname'])) {$sname = $_POST['sname'];}
if (isset($_POST['semail'])) {$semail = $_POST['semail'];}
if (isset($_POST['ssubject'])) {$ssubject = $_POST['ssubject'];}
if (isset($_POST['stext_message'])) {$stext_message = $_POST['stext_message'];}

if ($_POST['tress'])

{ 
die ("No trespassers allowed!");
}
else 



$sname = stripslashes($sname);

$ssubject = stripslashes($ssubject);



$sname = htmlspecialchars($sname);

$ssubject = htmlspecialchars($ssubject);


$semail = stripslashes($semail);

$stext_message = stripslashes($stext_message);


$semail = htmlspecialchars($semail);

$stext_message = htmlspecialchars($stext_message);

$ip = ($_SERVER['HTTP_X_FORWARDED_FOR'] == "" ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_X_FORWARDED_FOR']);





$address = "sergejs@holostovs.me";

$smessage = "".$stext_message."\n 

Subject of e-mail: ".$ssubject."\n

Mail From: ".$sname."\n E-mail: ".$semail."\n Senders IP: ".$ip."";

$verify = mail($address,'Mail From SH Subject: '.$ssubject,$smessage,"Content-type:text/plain; Charset=utf-8\r\n");


if ($verify == 'true')
{
echo "
<body bgcolor='#000000'>
<meta http-equiv='refresh' content='10;URL=http://www.sh.ddiscounter.ie/index.php'>
<link rel='stylesheet' type='text/css' href='Pcss/contact.css'/>
<table width='800' height='300' align='center'>
 <tr>
 <td width='100%' align='center' valign='middle'>
 
 <div id='contactlogo'></div>
 <div align='center' class='warning_font_big'><p>Thank you for your email.</p></div>
 <div align='center' class='warning_font' align='left'>I will reply as soon as possible.</div>
 <p align='center' class='redirect'>You will be redirected to the home page after 10 seconds. Thank you.</div></p>
 
 </td>
 </tr>
 </table>";
}
else 
{
echo "
<body bgcolor='#000000'>
<meta http-equiv='refresh' content='10;URL=http://www.sh.ddiscounter.ie/index.php'>
<link rel='stylesheet' type='text/css' href='Pcss/contact.css'/>
<table width='800' height='300' align='center'>
 <tr>
 <td width='100%' align='center' valign='middle'>
 
 <div id='contactlogo'></div>
 <div align='center' class='warning_font_big'>Error!!!</div>
 <div align='center' class='warning_font' align='left'>Accept my apologizes, but your email wasn’t sent, please try again.</div>
 <p align='center' class='redirect'>You will be redirected to the home page after 10 seconds. Thank you.</div></p>
 
 </td>
 </tr>
 </table>";
}
?>
