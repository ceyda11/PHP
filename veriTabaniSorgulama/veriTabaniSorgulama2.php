<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-12 border border-warning ">
				<?php
					$db=new mysqli("localhost","root","","urunler");
					mysqli_set_charset($db,"utf8");
					$sorgu="select * from urunbilgileri";
					$sonuc=$db->query($sorgu);
					$kayitSayisi=$sonuc->num_rows;
						for($i=0;$i<$kayitSayisi;$i++){
							$kayit=$sonuc->fetch_assoc();
							foreach ($kayit as $anahtar => $icerik) {
								if ($anahtar!="urunId")
									echo "anahtar : ".$anahtar." icerik : ".$icerik."<br>";
							}
							echo "<br>";
						}
				?>
		</div>
	</div>
</div>
</body>
</html>