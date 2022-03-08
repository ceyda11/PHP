<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-12 border border-warning ">
			<div class="row p-2">
				<?php
					$db=new mysqli("localhost","root","","urunler");
					mysqli_set_charset($db,"utf8");

					$sorgu="select * from urunbilgileri";

					$sonuc=$db->query($sorgu);//$sonuc nesne tipinde. 
					$kayitSayisi=$sonuc->num_rows;
						for($i=0;$i<$kayitSayisi;$i++){
							$kayit=$sonuc->fetch_assoc();//$kayit dizi tipinde
							echo "<div class='col-3 border border-danger'>";
								echo "<div class='row p-2'>";

									echo "<div class='col-12 border border-info'>"; 
										echo $kayit["urunId"];
									echo "</div>";
									
									echo "<div class='col-12 border border-info'>"; 
										echo $kayit["urunAdi"];
									echo "</div>";	

									echo "<div class='col-12 border border-info'>"; 
										echo "<img src='".$kayit["urunGorsel"]."' class='img-fluid' />";
									echo "</div>";
									
									echo "<div class='col-12 border border-info'>"; 
										echo $kayit["urunFiyat"];
									echo "</div>"	;

								echo "</div>";
							echo "</div>";	
						}
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>