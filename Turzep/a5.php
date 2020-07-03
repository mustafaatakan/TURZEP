<?php 

include ("uygulamalar.php");
include ("baglan.php");
?>

<style>
#yanBTNe {
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
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A5 <br> Broken Access Control (Kırık Erişim Kontrolü) </br> </h1>
<b><br>
Broken Access Control, erişim kontrolünün hatalı yapılmasından veya izin kontrollerinin düzgün dağıtılmamasından kaynaklanmaktadır. Aynı zamanda varsayılan sistem engellemeleri
bu zafiyetin tetiklenmesinde rol oynamaktadır. <br></br><br>Genel varsayılan engellemeler ve erişim yetkileri saldırganlar tarafından çözüldüğü için koruma anlamında zayıf kalmaktadır. 
Yetkilerin düzgün olmamasından dolayı saldırganların yetkisiz fonksiyonlar üzerinde kontrole sahip olması, zafiyetin uygulanabilirlik açısından kolay ancak bilgi erişimi açısından
diğer zafiyetlere kıyasla daha az olmasının başlıca sebeplerindendir. </br><br></br><br> Bu zafiyete karşı alınabilecek önlemler arasında erişimlerin loglanması, yetkilendirmenin düzenlenmesi,
yönlendirmelerin daha kontrollü hale getirilmesi ve oturumların sabitlenmesi örnek olarak gösterilebilir. </br>
<br></br><br> Broken Access Control Örnekleri: &nbsp  Link Change, Button Extra Info, Hidden Menu... </br> </br> </b>
</div>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">

<form name="a5" method="GET" action="a5.php">
<br> Link Change Uygulama </br>
<input name="kad" type="text" placeholder="Kullanıcı Adı"> <p></p>
<input name="kpw" type="password" placeholder="Şifre"> <p></p>
<input name="gizli" type="hidden" value="Gizli bilgi burada...">
<input name="onay" type="submit" value="Giriş Yap"> <!-- /Users bakimda -->

</form>

<?php
$ad=NULL;
$sifre=NULL;
if (isset($_GET['kad'])){
$ad=$_GET["kad"];
$sifre=$_GET["kpw"];
}

$sorgu= "SELECT * FROM uye WHERE Kad='$ad'";
$komut= mysqli_query($bag,$sorgu);

$sonuc=mysqli_fetch_assoc($komut);
if($sifre!=NULL){
if($sifre==$sonuc['Kpw']){
	$veri=$sonuc["Kid"];
	echo '<form name="a5" method="GET" action="a5.php">
<input type="text" name="id" value="'.$veri.'" style="visibility: hidden">
<input name="getir" type="submit" value="Bilgileri Getir">

</form>';
}
else
    echo "Giriş Başarısız";
}
if(isset($_GET['id'])){

$gelen=$_GET['id'];

$sorgu2="SELECT * FROM uye WHERE Kid='$gelen'";
$komut2= mysqli_query ($bag,$sorgu2);
$sonuc2= mysqli_fetch_assoc($komut2);

echo "Kullanıcı Id: ".$sonuc2['Kid']."<br>"."Kullanıcı Adı: ".$sonuc2['Kad']."<br>"."Kullanıcı Yaşı: ".$sonuc2['Kyas']."<br>"."Kullanıcı Ülkesi: ".$sonuc2['Kulke']."<br>";
}




?>

</div>





</html>