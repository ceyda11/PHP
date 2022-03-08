<?php
$db=new mysqli("localhost","root","","urunler");
mysqli_set_charset($db,"utf8");

$secilenlerDizi=$_POST["dizi_"];
$sorgu="select * from urunbilgileri where ";
foreach ($secilenlerDizi as $anahtar => $icerik) {
	switch ($icerik){
		case 0:
			$sorgu.="(urunFiyat>=0 and urunFiyat<=1000) or ";
			break;
		case 1:
			$sorgu.="(urunFiyat>=1001 and urunFiyat<=2000) or ";
			break;
		case 2:
			$sorgu.="(urunFiyat>=2001 and urunFiyat<=3000) or ";
			break;
		case 3:
			$sorgu.="(urunFiyat>=3001 and urunFiyat<=4000) or ";
			break;
		case 4:
			$sorgu.="(urunFiyat>=4001 and urunFiyat<=5000) or ";
			break;			
	}
}
$sorgu=substr($sorgu,0,strlen($sorgu)-3);
$sonuc=$db->query($sorgu);
$kayitSayisi=$sonuc->num_rows;
for($i=0;$i<$kayitSayisi;$i++){
	$kayit=$sonuc->fetch_assoc();
	echo "<div class='col-3 border border-warning'>";
		echo "<div class='row p-1'>";
			foreach ($kayit as $anahtar => $icerik) {
				if($anahtar!="urunId"){
					echo "<div class='col-12 border border-warning p-1 mt-1'>";
						if ($anahtar!="urunGorsel")
							echo $icerik;
						else
							echo "<img src='$icerik' class='img-fluid'/>";
					echo "</div>";	
				}
			}
			echo "</div>";
	echo "</div>";

}
?>