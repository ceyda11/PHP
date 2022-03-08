<?php
$db=new mysqli("localhost","root","","sayfalama");
$db->set_charset("utf8");
$sorgu="select * from urunler";
$sonuc=$db->query($sorgu);
$ks=$sonuc->num_rows;
echo $ks;
?>