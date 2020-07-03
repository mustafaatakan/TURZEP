<?php 

include ("uygulamalar.php");

?>

<style>
#yanBTNd {
	background-color: #5D6D7E !important;
}

</style>


<html>


<div style="background-color:lightblue; height: 515px; width: 90%; font-family: monaco,helvetica,arial; float:right;">
<h1 align="center" style="font-family: monaco,helvetica,arial;"> A4 <br> XML External Entities (XML Harici Varlık Enjeksiyonu) </br> </h1>
<b><br>
XXE, XML kullanılarak gerçekleştirilen bir enjeksiyon türüdür. Diğer enjeksiyonlardan farklı olarak çok daha farklı ve özel durumlarda istismar edilebilmektedir. Ayrıca normal
enjeksiyon saldırılarından çok daha farklı bir çalışma sistemine sahiptir. <br></br><br>XXE zafiyeti XML verilerinin işlenmesi sırasında özel tanımlanan "Entity" verilerinin dışarıdan çağırılması
ile tetiklenmektedir. Bu durumun gerçekleşmesi için kullanılan XML kütüphanesinin gerekli izinleri sağlamış olması ve erişime açık olması gerekmektedir. Bazı XML kütüphaneleri
varsayılan olarak bu izinlere sahiptir. Sistemde bulunan tüm verilere erişim sağlayabilen ve "Command Injection" gibi sistem üzerine doğrudan müdahale edebileceğimiz
ciddi bir açıktır.</br> <br></br><br> XXE Komut Örneği: &nbsp DOCTYPE Hacking [!ENTITY kullanici SYSTEM kodumuz] </br>
</br></b>

</div>

<div   style="background-color:lightblue; height: 305px; width: 90%; float:right;">
<h1 align="center" style="background-color:lightblue; font-family: monaco,helvetica,arial;"> UYGULAMA ÇOK YAKINDA </h1>
</div>






</html>