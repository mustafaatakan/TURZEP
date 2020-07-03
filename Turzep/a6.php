<?php 

include ("uygulamalar.php");

?>

<style>
#yanBTNf {
	background-color: #5D6D7E !important;
}
input[type=submit] {
  background-color: #0E1C4A;
  color: white;
  padding: 12px 25px;
  margin: 3px 2px;
 cursor: pointer;
}
input[type=text] {
  background-color: white;
  color: black;
  padding: 12px 25px;
  margin: 3px 2px;
 
}
input[type=password] {
  background-color: white;
  color: black;
  padding: 12px 25px;
  margin: 3px 2px;
 
}
</style>


<html>



<div style="background-color:lightblue; height: 515px; width: 90%; font-family: monaco,helvetica,arial; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A6 <br> Security Misconfiguration (Güvenlik Yetkilendirme Hatası) </h1>
<b><br> Security Misconfiguration, en çok karşılaşılan zafiyetlerden bir tanesidir. Bu zafiyeti oluşturan sebepler yüksek ihtimalle son kullanıcı kaynakıdır. Security Misconfigruation, 
"Gözden Kaçırılan Güvenlik" olarak da değerlendirilebilir. Genelde sistemde geçici olarak bulunması gereken, gereksiz olarak bulunan veya kontrol edilmesi göz ardı edilen bölümler veya
servislerin kaldırılmaması ve diğer zafiyetlere yol açmasından dolayı tehlikelidir. <br></br><br> Bir çok alanda diğer zafiyetlerle ortak yönleri bulunmaktadır ve "genel" bir güvenlik zafiyeti 
olduğu söylenebilir. Güncellikten uzak kalınması, rutin güvenlik kontrollerinin yapılmaması, fazla yayınların bulunması gibi durumlar da bu zafiyetin oluşmasına sebep olan durumlar
olarak kabul edilebilir. </br> <br></br><br> Bu zafiyette korunmak için, sistemler güncel tutulmalı, gereksiz bilgiler ve eklentiler kaldırılmalı, sistemde yapılması planlanan 
her değişikliğin güvenlik araştırması ve düzenlemeleri değişiklikten önce yapılmalıdır. </br><br></br><br> Security Misconfiguration Örnekleri:  &nbsp Default Password, Unauthorized Page, 
Unprotected File... </br></br></b>
</div>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">
<br> Default Password Uygulama </br>
<form name="default" method="POST"  action="a6.php">
<input name="kad" type="text" placeholder="Kullanıcı Adı"> <p></p>
<input name="kpw" type="password" placeholder="Şifre"> <p></p>
<input name="onay" type="submit" value="Giriş Yap">
<p></p>
<?php

if(isset($_POST["kad"])){
$kull=$_POST["kad"];
$sif=$_POST["kpw"];

if($kull=="admin" && $sif=="password")
	echo "Giriş Başarılı";
else
	echo "Yanlış Kullanıcı Adı ve Şifre";
}
?>

</div>





</html>