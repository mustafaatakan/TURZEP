<?php 

include ("uygulamalar.php");

?>

<style>
#yanBTNk {
	background-color: #5D6D7E !important;
}
</style>


<html>


<div style="background-color:lightblue; height: 820px; width: 90%; font-family: monaco,helvetica,arial; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A10 <br> Insufficient Logging and Monitronig (Loglama ve İzleme) </br> </h1>
<b><br> Loglama ve İzleme, keşfedilmesi neredeyse imkansız olan ve aslında sistem zafiyetinden ziyade sistemin hiçbir şekilde loglama yapmamasından veya sistem üzerinde gerçekleşen
olayların (logların) izlenmemesinden yani sistemin bir nevi başı boş bırakılmasından kaynaklanan bir zafiyettir. <br></br><br> Loglama ve izleme, özellikle sistemlere gerçekleşen
saldırıların anlık olarak engellenmesinde ve sistemin korunmasında büyük öneme sahiptir. Sistem ile ilgili bağlantısı olan tüm olayların loglanması aynı zamanda sistem üzerinde 
alarm üretilmesine olanak sağlayarak, farklı tür sistemler ile (IPS gibi) birlikte çalışarak maksimum verimlilikte güvenlik sağlayabilmektedir. </br><br></br><br> Sistemin bu zafiyete
sahip olup olmadığını keşfetmek pek mümkün olmamakla birlikte bazı yöntemlerle birlikte (örneğin sistemin saldırıları engelleyip engellemediğini öğrenmek için saldırmak gibi) 
bu zafiyetin varlığıyla ilgili bir fikrimiz olabilir. Loglama ve izleme günümüz Siber Güvenlik dünyasında çok önemli bir yere sahip olmakla birlikte gün geçtikçe daha da önem kazanmaktadır. </br>
</br><br></br><br>SALDIRI LOGLARI ÖRNEK TAKİP DURUMLARI</br><br>1-) Gelen veya giden trafik üzerinde çok fazla paket olması. (DOS/DDOS) </br>
<br>2-) Bir servis üzerinde kısa sürede çok sayıda hatalı giriş denemesi. (Brute Force)</br><br>3-) Trafik paketleri incelendiğinde şifrelerin açık olarak görünmesi (HTTP Cleartext)
</br><br>4-) Trafik paketleri içerisinde SQL komutları veya ' karakterinin bulunması. (SQL Injection)</br><br>5-) Dışarıda bulunan zararlı adresler ile içeride bulunan bir cihazın iletişim talebi (Botnet/Malware)</br></b>
</div>








</html>