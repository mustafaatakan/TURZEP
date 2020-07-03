<?php 

include ("uygulamalar.php");

?>

<style>
#yanBTNg {
	background-color: #5D6D7E !important;
}
</style>


<html>



<div style="background-color:lightblue; font-family: monaco,helvetica,arial; height: 515px; width: 90%; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A7 <br> Cross Site Scripting (Siteler Arası Betik Çalıştırma) </h1>
<b><br>
XSS, popülerliğini gittikçe yitirmekte olan ancak bunun yanında son derece tehlikeli bir zafiyettir. Web üzerinde Javascript komutları çalıştırılmasıyla tetiklenmektedir.  
Veriler kontrol edilmeden, filtrelenmeden ve düzenlenmeden HTTP Response olarak gönderilmektedir ve bu sebepten dolayı saldırganlar, kullanıcının tarayıcısı üzerinde Javascript 
kodları çalıştırılarak kullanıcının oturumunu çalabilir ve müdahale edebilirler. Sık karşılaşılmasının yanı sıra kolay tespit edilmektedir. <br> </br> <br> Giriş verilerinin ve
iletişimin kontrol edilmesi, özel frameworkler kullanılması, zafiyet testlerinin yapılarak ve zayifet hakkında bilgilendirerek web düzenlemelerinde potansiyel açık oluşturabilecek
konumların belirlenerek güvenli hale getirilmesi XSS için alınabilecek önlemlerin başında gelmektedir. </br> <br></br> <br> XSS Örnekleri: &nbsp Reflected XSS, Stored XSS, DOM XSS </br>
<br></br> <br> XSS Komut Örneği: &nbsp http://egzempilsite.com/index.php# <"script">alert("XSS Bu");<"script"> </br>
</br></b>

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
p {
	color: red;
	font-size: 25px;
	text-transform: uppercase;
	word-wrap: break-word;
	

}
</style>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">
<form name="default" method="GET"  action="a7.php">
<br>Reflected XSS Uygulama</br>
<br>EKRANDA GÖRMEK İSTEDİĞİNİZ MESAJI YAZIN</br> <p></p>
<input name="text" type="text" placeholder="Mesaj Giriniz">
<p></p>
<input name="submit" type="submit" value="Göster">
</form>
<?php
if(isset($_GET["text"])){
$msj=$_GET["text"];
echo "<p>"."$msj"."</p>";
}
?>
</div>




</html>