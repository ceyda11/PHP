<?php
$urunAdi=$_POST["urunAdi_"];
$urunGorsel=$_POST["urunGorsel_"];
$urunFiyat=$_POST["urunFiyat_"];
$db=new mysqli("localhost","root","","urunler");
mysqli_set_charset($db,"utf8");
$sorgu="insert into urunbilgileri(urunAdi,urunGorsel,urunFiyat) values('$urunAdi','$urunGorsel','$urunFiyat')";
$sonuc=$db->query($sorgu);
echo $sonuc;
?>