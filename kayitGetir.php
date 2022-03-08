<?php
$basNo=$_POST["basNo_"];
$bitNo=$_POST["bitNo_"];

$db=new mysqli("localhost","root","","sayfalama");
$db->set_charset("utf8");
$sorgu="select * from urunler";
$sonuc=$db->query($sorgu);
$ks=$sonuc->num_rows;
$sorgu="select * from urunler order by urunId limit $basNo,$bitNo";
$sonuc=$db->query($sorgu);
if ($ks>=$bitNo){
	$sayfaBasiHucre=4;	
}
else
{
	$sayfaBasiHucre=$ks-12;		

}

for($i=0;$i<$sayfaBasiHucre;$i++){
	$kayit=$sonuc->fetch_assoc();
	echo "<div class='col-3'>";
		echo '<div class="card text-center">';
		  echo '<div class="card-header">';
		    echo $kayit["urunBaslik"];
		  echo '</div>';
		  echo '<div class="card-body">';
		    echo '<h5 class="card-title">beyener.com</h5>';
		    echo '<img src="'.$kayit["urunGorsel"].'" class="img-fluid" />';
		  echo '</div>';
		  echo '<div class="card-footer text-muted">';
		    echo "Tüm ürünlerde %50 indirim";
		  echo '</div>';
		echo '</div>';
	echo "</div>";
}
?>