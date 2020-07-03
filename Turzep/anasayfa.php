<html>
<style>
#ana {
	background-color: #40E0D0 !important;
	
}
</style>

</html>

<?php
include("index.php");
?>
<html>
<div style="background-color:lightblue; height: 810px; width: 100%;font-family: monaco,helvetica,arial; font-size: 17px" >
<h1 align="center" style="font-family: monaco,helvetica,arial; margin-top: 0px;"> TURZEP KULLANIM TALİMATLARI </h1><br></br>
<b><h3> TURZEP KULLANIMINDA DİKKAT ETMENİZ GEREKEN DURUMLAR </h3><p></p><br> - Veri Tabanı oluşturmadan TURZEP'i tam anlamıyla kullanmanız mümkün değildir. TURZEP'i kullanmaya
başlamadan önce mutlaka MYSQL Veri Tabanınınızın açık olduğundan ve "Veri Tabanı Kuruldu" yazısını gördüğünüzden emin olunuz.</br><p></p><br>- "Uygulamalar" bölümüne giriş yapmadan
önce mutlaka diğer bölümlere de bir göz atın.</br><p></p><br>- Uygulamalar'ı sırayla uygulamak zorunda değilsiniz. Bazı uygulamaların örnekleri kendi sayfasında bulunmaktadır. 
Zorlandığınız bölümler için araştırma yapıp uygulama hakkında daha fazla bilgi edinebilirsiniz. </br> <p></p> <br>- Tüm Uygulamalar OWASP 2017 Top 10 baz alınarak hazırlanmıştır.
Daha fazla bilgi edinmek için OWASP sitesine girerek makaleleri okuyabilirsiniz. </br> <p></p> <br>- "Zafiyetli Makine" bölümünde kullanım talimatları bulunmaktadır. Adım adım 
talimatları uygulamadığınız takdirde sorun yaşayabilirsiniz. </br> <p></p> <br>- Aşağıdaki butona tıklayarak Veri Tabanını oluşturun ve TURZEP'i kullanmaya başlayın.</br><br></br>

<form name="vt" action="anasayfa.php" method="POST">
<h4> VERİ TABANI OLUŞTUR </hr><br></br>
<input type="submit" name="Onay" value="OLUSTUR" style="width: 200px; height: 50px;" >
</form>

<?php 

if(isset($_POST["Onay"])){
	
	
	$bag=mysqli_connect("localhost","root","");
		
	$vtol="CREATE DATABASE turzep";
	$vts=mysqli_query($bag,$vtol);
	if($vts){
     $tbol=" CREATE TABLE uye ( 
	 Kid INT(8) AUTO_INCREMENT PRIMARY KEY,
	 Kad VARCHAR(18) NOT NULL,
	 Kpw VARCHAR(24) NOT NULL,
	 Kyas VARCHAR(3) NOT NULL,
	 Kulke  VARCHAR(20) NOT NULL )";
	 $bag=mysqli_connect("localhost","root","","turzep");
	$tts=mysqli_query($bag,$tbol);

	if($tts){
		
		$uyek=' INSERT INTO uye (Kad, Kpw, Kyas, Kulke) VALUES ("admin","adminpw","23","Turkiye")';
		$son=mysqli_query($bag,$uyek);
		$uyek=' INSERT INTO uye (Kad, Kpw, Kyas, Kulke) VALUES ("atakan","afatsum","24","Turkiye")';
		$son=mysqli_query($bag,$uyek);
		$uyek=' INSERT INTO uye (Kad, Kpw, Kyas, Kulke) VALUES ("jackspear","sparrow14","41","Amerika")';
		$son=mysqli_query($bag,$uyek);
		$uyek=' INSERT INTO uye (Kad, Kpw, Kyas, Kulke) VALUES ("hansmadillo","1dasisthans5","15","Almanya")';
		$son=mysqli_query($bag,$uyek);
		$uyek=' INSERT INTO uye (Kad, Kpw, Kyas, Kulke) VALUES ("diegoamigo","1dostres4!","28","Ispanya")';
		$son=mysqli_query($bag,$uyek);
		$uyek=' INSERT INTO uye (Kad, Kpw, Kyas, Kulke) VALUES ("almacino","mylilfriend","33","Italya")';
		$son=mysqli_query($bag,$uyek);
		
		
		if($son)
			echo "<br></br>"."Veri Tabanı Kuruldu";
	
	
}
	
	}
	else
		"VT Olusmadi";
}



?>
</div>
</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		