<?php 

include ("uygulamalar.php");
include ("baglan.php");

?>

<style>
#yanBTNa {
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
<div style="background-color:lightblue; height: 515px; width: 90%;font-family: monaco,helvetica,arial; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A1 <br> (INJECTION / ENJEKSİYON) </h1>
<b><br>
Injection, OWASP Top 10 içerisinde keşfedilmesi ve uygulanması en kolay zafiyetlerden bir tanesidir. Aynı zamanda bu zafiyetin istismar edilmesiyle birlikte çok ciddi bilgiler 
elde edilebilmektedir. Zafiyet sistem içerisine kod enjekte edilmesiyle ortaya çıkmaktadır. Enjekte edilen kodlar sistem üzerinde direkt çalıştığı için, saldırganın tamamen sistem 
üzerinde bir işlev yerine getirmesine olanak sağlıyor. <br></br><br>Injection zafiyeti, genel oranda içerisinde alınan verilerin kaynak kodlar arasında hiçbir kontrole veya ek adıma maruz
kalmadan direkt olarak kullanılmasından kaynaklanıyor.</br> <br></br>Bu zafiyete karşı alınabilecek en temel güvenlik önlemi kaynak kod analizi yapılarak sistemin bu zafiyete karşı güvenli kodlama
ile tasarlanmasıyla sağlanıyor. <br></br><br> Bazı Injection türleri: &nbsp  SQL Injection, Command Injection, NO-SQL Injection, LDAP Injection, Blind SQL Injection... </br>
<br></br><br> Injection komut örnekleri: &nbsp  http://www.egzempilsite.com/index.php?id=atakan’ or 1=1–   -   &nbsp &nbsp  /  &nbsp &nbsp     http://egzempilsite.com/admin/command.php?*command*=**sifreler.txt** </br>
</br></b>
</div>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">
<form name="a1" method="POST" action="a1.php" style="float:left">
<br> SQL Injection Uygulama </br>
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

$sorgu= "SELECT * FROM uye WHERE Kad='$ad' AND Kpw='$sifre'";
$komut= mysqli_query($bag,$sorgu);

$sonuc=mysqli_fetch_assoc($komut);
if($ad!=NULL){
echo "Kullanıcı Adı: ".$sonuc['Kad']."<br>";
echo "Şifre: ".$sonuc['Kpw'];

}
?>

<form name="a11" method="GET" action="a1.php" style="float:left">
<br> SQL Injection Uygulama 2 </br>
<input name="kadi" type="text" placeholder="Kullanıcı Adı" onpaste="return false" onkeydown="return (event.keyCode!=50);"/><p></p>
<input name="kpwi" type="password" placeholder="Şifre"  onpaste="return false" onkeydown="return (event.keyCode!=50);"/><p></p>
<input name="onay" type="submit" value="Giriş Yap">

</form>

<?php
$ad=NULL;
$sifre=NULL;
if (isset($_GET['kadi'])){
$ad=$_GET["kadi"];
$sifre=$_GET["kpwi"];
}
//if(preg_match("/([\$#\*']+)/", $sifre)){
	//echo "Hatali karakter kullandiniz";

//	}else{


$sorgu= "SELECT * FROM uye WHERE Kad='$ad' AND Kpw='$sifre'";
$komut= mysqli_query($bag,$sorgu);

$sonuc=mysqli_fetch_assoc($komut);
if($ad!=NULL){
echo "Kullanıcı Adı: ".$sonuc['Kad']."<br>";
echo "Şifre: ".$sonuc['Kpw'];
//}


}


?>
</div>


</html>
