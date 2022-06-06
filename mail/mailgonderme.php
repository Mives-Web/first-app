<?php
require("mail/class.phpmailer.php");
/* Müşteri */
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$mail->SMTPAuth = true;
$mail->Host = "mail.domain.com"; // Mail sunucusuna ismi
$mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "lorem@lorem.com"; // Mail adresimizin kullanicı adi
$mail->Password = "password"; // Mail adresimizin sifresi
$mail->SetFrom("mail@lorem.com", "Header"); // Mail attigimizda gorulecek ismimiz
$mail->AddAddress("customer mail"); // Maili gonderecegimiz kisi yani alici
$mail->Subject = "Header"; // Konu basligi
$mail->Body = '
<!doctype html>
<html style="font-family: Calibri" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
	<style type="text/css">
	body { background:#F1F1F1; margin:0; padding:0; width:100%; font-size:20px; }
	table { border-collapse: collapse; }
	td {border-collapse: collapse;}	
	</style>
	</head>
<body>

<center>
<table style="width:630px;">
<tr>	
<center>	<td bgcolor="#FFFFFF"><img style="margin-top:25px;" src="https://png.pngtree.com/element_our/png_detail/20180911/background-material-design-for-lorem-ipsum-logo-png_89689.jpg" width="250"></td></center>
</tr>
<tr>
<td bgcolor="#FFFFFF" style="padding: 30px;">

<table>
<tr>
<td style="width:540px; border-top:4px solid #F1F1F1;"></td>
</tr>


<tr>
<td><h3 style="color:#000; font-weight: normal; margin: 5px; margin-top: 20px;text-align:center;"><b>İletişim Formu</b></h3></td>	
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Ad: '.$_POST['userName'].'</td>	
</tr>	
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Soyad: '.$_POST['userSurName'].'</td>	
</tr>
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">E-posta: '.$_POST['userMail'].'</td>	
</tr>
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Telefon No: '.$_POST['userTel'].'</td>	
</tr>
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Ülke: '.$_POST['userUlke'].'</td>	
</tr>
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Şehir: '.$_POST['userSehir'].'</td>	
</tr>
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Konu: '.$_POST['konu'].'</td>	
</tr>
<tr>
<td style="width:600px; border-top:4px solid #F1F1F1;"></td>
</tr>
<tr>
<td style="padding: 10px; background: #F1F1F1; font-size: 17px;">Mesaj: '.$_POST['userMesaj'].'</td>	
</tr>
</table>	
	




</td>
</tr>
	
	
</table>
</center>
	
    </body>
</html>	
';


if(!$mail->Send()){
	/*echo "Mailer Error: ".$mail->ErrorInfo;*/

$message= 'Form gönderimi hatalı. Tekrar deneyiniz. !';
			
} else {
$message = 'Bilgiler tarafımıza ulaşmıştır.<br/> En kısa sürede tarafınıza dönüş sağlanacaktır.';
header('Location:https://tisert.com.tr/iletisim.php');
}
/* mail */	

?>
