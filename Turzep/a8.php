<?php 

include ("uygulamalar.php");

?>

<style>
#yanBTNh {
	background-color: #5D6D7E !important;
}
</style>


<html>



<div style="background-color:lightblue; height: 515px; width: 90%; font-family: monaco,helvetica,arial; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A8 <br> Insecure Deserialization (Güvensiz Ters Serileştirme) </br> </h1>
<b><br>
Insecure Deserialization, kullanıcıdan gelen verilerin deserializasyonu sonucunda oluşmaktadır. Nesne tabanlı dillerle tetiklenebilen bu zafiyetin genel anlamda tekrarlardan oluşması
ve kontrolsüz (çoğu zaman sonsuz) devam etmesi, bilgi almaktan daha çok sistemi meşgul etmek gibi farklı tür saldırılara da yol açtığını söyleyebiliriz. <br></br><br>Insecure Deserialization, 
bu özelliklerinden dolayı saldırganın Denial of Service (DoS) gibi bir saldırıyı gerçekleştirmesi için de olanak sağlamaktadır. Aynı zamanda Remote Code Execution gibi 
enjeksiyon benzeri saldırılar da Insecure Deserialization zafiyeti sayesinde kullanılabilmektedir. </br><br></br><br> Bu zafiyetten korunmak için tüm giriş verilerinin kontrol edilerek, 
sistem üzerinde tehlikeli sayılabilecek komutların veya işlemlerin engellenmesi gerekmektedir. </br> 
</div>

<div   style="background-color:lightblue; height: 305px; width: 90%; font-family: monaco,helvetica,arial; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> UYGULAMA ÇOK YAKINDA ! </h1>
</div>





</html>