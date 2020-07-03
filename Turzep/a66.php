<?php 

include ("uygulamalar.php");
include ("baglan.php");
?>

<style>
#yanBTNf {
	background-color: #5D6D7E !important;
}
</style>


<html>



<div style="background-color:lightblue; height: 515px; width: 90%; float:right;">

</div>
<style>

</style>
<div   style="background-color:lightgray; height: 305px; width: 90%; float:right;">

<form name="default" method="POST"  action="a6.php">
<input name="kad" type="text" placeholder="Kullanıcı Adı">
<input name="kpw" type="password" placeholder="Şifre">
<input name="onay" type="submit" value="Giriş Yap">

<?php
$kull=$_POST["kad"];
$sif=$_POST["kpw"];
?>

</div>





</html>