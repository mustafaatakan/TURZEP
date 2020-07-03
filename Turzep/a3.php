<?php 

include ("uygulamalar.php");
include ("baglan.php");
?>

<style>
#yanBTNc {
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


<div style="background-color:lightblue; font-family: monaco,helvetica,arial; height: 515px; width: 90%; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A3 <br> SENSITIVE DATA EXPOSURE (HASSAS VERİ AÇIĞA ÇIKMASI) </br> </h1>
<b><br>
Sensitive Data Exposure, şifrelenmesi gereken verilerin, insanın okuyabileceği şekilde görünebilmesi veya eski şifreleme türlerinin kullanılması sebebiyle rahatça verilerin
okunabilir hale gelmesinden doğan bir zafiyettir. Sistemde kullanılan şifreleme yöntemlerinin güvenilirliği ile doğru orantıda istismar edilebilirliği bulunmaktadır.<br></br><br>
Bu zafiyetten korunmanın en iyi yolu sistemdeki haberleşmenin ve sistem içerisinde özel şifrelenme ile korunması gereken verilen, şifrelenme yöntemlerinin kontrol edilmesiyle
sağlanmaktadır. Sistemin aynı zamanda sertifikasyonun yapılması da bu zafiyetten korunmak için gerekli olan önlemler arasındadır.</br><br></br><br> Sensitive Data Exposure Türleri: 
&nbsp Clear Text HTTP, Encrypted Cookie, HTML5 Storage...</br>
</br></b>
</div>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">

<form name="a3" method="POST" action="a3.php">
<br> Clear Text HTTP Uygulama </br>
<input name="kad" type="text" placeholder="Kullanıcı Adı"><p></p>
<input name="kpw" type="password" placeholder="Şifre"><p></p>
<input name="onay" type="submit" value="Giriş Yap">

</form>

<?php
$ad=NULL;
$sifre=NULL;
if (isset($_POST['kad'])){
$ad=$_POST["kad"];
$sifre=$_POST["kpw"];
}

$sorgu= "SELECT Kpw FROM uye WHERE Kad='$ad'";
$komut= mysqli_query($bag,$sorgu);

$sonuc=mysqli_fetch_assoc($komut);
if($sifre!=NULL){
if($sifre==$sonuc['Kpw'])
	echo "Giriş Başarılı";
else
    echo "Giriş Başarısız";
}
?>

</div>






</html>