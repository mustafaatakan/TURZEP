<?php 

include ("uygulamalar.php");
include ("baglan.php");
?>

<style>
#yanBTNb {
	background-color: #5D6D7E !important;
}
</style>


<html>



<div style="background-color:lightblue; font-family: monaco,helvetica,arial; height: 515px; width: 90%; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A2 <br> (BROKEN AUTHENTICATION / KIRIK KİMLİK DOĞRULAMA)</h1>
<b><br>
Broken Authentication, genelde oturum yönetiminin düzgün yapılmadığı veya kimlik doğrulama sisteminde kontrollerin eksik olduğu durumlarda karşımıza çıkan bir zafiyettir. İçerisinde
farklı türlerde ve sistem üzerinde yetki sağlayabilecek çeşitli açıklıklar barındırmaktadır. Broken Authentication, sistem üzerinde dolaylı olarak yetki almamızı sağlayarak sistemin
istismar edilmesine olanak sağlayan ciddi bir zafiyettir. <br></br><br> Son kullanıcı testleriyle birlikte, önemli adımlarda kimlik kontrolünün yapılması, yetkilendirmenin iyi dağıtılması, 
sık kullanılan parolalardan kaçınılması ve kaba kuvvet saldırıları gibi saldırılara engel olabilecek (robot kontrolü gibi) sistemlerin eklenmesi bu zafiyete karşı alınabilecek
önlemler arasındadır.</br><br></br><br> Broken Authentication Örnekleri: &nbsp Brute Force, Logout Management, Insecure Login Forms... </br> </b> <p style="float:right"><b><br> Parola Güçleri: </br><br> 0-40 Çok Zayıf Parola </br><br> 41-59 Zayıf Parola </br><br> 60-79 Normal Güçte Parola </br> 
<br> 80-100 Güçlü Parola </br> </b></p>

 
</div>
<style>
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
.aaa {
	float: left;
	margin: 0;
	padding: 0;
}
.bbb{
	float: left;
	margin-left: 200px;
	padding: 0;
}

</style>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">
<form name="a2" class="aaa" method="POST" action="a2.php">
<br>Brute Force Uygulama</br>
<input name="kad" type="text" placeholder="Kullanıcı Adı"> <p></p>
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
if($ad!=NULL){
   if($sifre==$sonuc['Kpw'])
   echo "Giris Basarili";
   else
	   echo "Giris Basarisiz";
   

}
?>

<form name="a22" class="bbb" method="POST" action="a2.php">
<br>Insecure Login Forms Uygulama</br>
<input name="kad2" type="text" placeholder="Kullanıcı Adı"> <!--jackspear --> <p></p>
<input name="kpw2" type="password" placeholder="Şifre"> <!--sparrow14 --> <p></p>
<input name="onay2" type="submit" value="Giriş Yap">

</form>
<?php
$ad=NULL;
$sifre=NULL;
if (isset($_POST['kad2'])){
$ad=$_POST["kad2"];
$sifre=$_POST["kpw2"];
}

$sorgu= "SELECT Kpw FROM uye WHERE Kad='$ad'";
$komut= mysqli_query($bag,$sorgu);

$sonuc=mysqli_fetch_assoc($komut);
if($ad!=NULL){
   if($sifre==$sonuc['Kpw'])
   echo "Giris Basarili";
   else
	   echo "Giris Basarisiz";
   

}
?>
<form name="a222" class="ccc" method="POST" action="a2.php" style="float:right">
<br>Parola Kontrol</br>
<input name="kontrol" type="password" placeholder="Parolanizi girin."> <p></p>
<input name="sub1" type="submit" value="Kontrol Et"> <p></p>
<input name="sub2" type="submit" value="Parola Olustur"> <p></p>
</form>

<?php


if (isset($_POST['sub2'])){
	$karakter="0123456789abcdefghijklmnoprstuwxyzqABCDEFGHIJKLMNOPRSTUWXYZQ.!,?-_><@%*=$#";
    for($i=0; $i<=15; $i++){
        $s=rand(0, 73);
        $sifre[$i]=$karakter[$s];
    }
    echo implode($sifre);
}
	else{
		$deger=0;
		if (isset($_POST['kontrol'])){
$sifreniz=$_POST["kontrol"];
$uzunluk=strlen($sifreniz);
if($uzunluk <= 5)
	echo "Parolaniz cok kisa. <br>";
else if($uzunluk <= 7)
	$deger+=19;
else if($uzunluk == 8)
	$deger+=23;
else if($uzunluk == 9)
	$deger+=27;
else if($uzunluk == 10)
	$deger+=32;
else if($uzunluk == 11)
	$deger+=36;
else if($uzunluk == 12)
	$deger+=41;
else if($uzunluk == 13)
	$deger+=44;
else if($uzunluk == 14)
	$deger+=49;
else if($uzunluk == 15)
	$deger+=55;
else
	$deger+=59;

if (preg_match('`[A-Z]`',$sifreniz))
	$deger+=12;
if (preg_match('`[a-z]`',$sifreniz))
	$deger+=12;
if (preg_match('`[0-9]`',$sifreniz))
	$deger+=8;
if (preg_match('`[.!,?\-_><@%*=$#]`',$sifreniz))
	$deger+=9;

if (preg_match("/123456789/",$sifreniz) || preg_match("/12345678/",$sifreniz) || preg_match("/1234567/",$sifreniz) || 
preg_match("/123456/",$sifreniz) || preg_match("/12345/",$sifreniz) || preg_match("/01234/",$sifreniz) || preg_match("/012345/",$sifreniz) || 
preg_match("/0123456/",$sifreniz) || preg_match("/01234567/",$sifreniz) || preg_match("/012345678/",$sifreniz) || preg_match("/0123456789/",$sifreniz)){
	echo "Cok sik kullanilan ve kolay bir parolaniz var <br>";
	$deger=10;
}


echo "Parola Gucunuz: %".$deger;

		}
		
	}












?>




</div>





</html>