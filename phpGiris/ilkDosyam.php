<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.yaziKirmizi{color:red;}
		.kenarlik{border:2px solid red;}
	</style>
</head>
<body>
	<?php
		//bir değişkene logo resminin yolunu ve adını atayınız. Bu değişkeni kullanarak logonun (img etiketi ile) sayfada görünmesini sağlayın.
		$baslik="YÖNETİM BİLİŞİM SİSTEMLERİ BÖLÜMÜ";
		$resimYoluAdi="resimler/logoTr.png";
	?>
	<div class="container kenarlik p-2">
		<div class="row border border-warning m-0 p-2">
			<div class="col-12 border border-info text-center">
				<h2 class="yaziKirmizi p-2">YÖNETİM BİLİŞİM SİSTEMLERİ BÖLÜMÜ</h2>
				<?php
					echo "<h2 class='yaziKirmizi p-2'>YÖNETİM BİLİŞİM SİSTEMLERİ BÖLÜMÜ</h2>";
					echo "<h2 class='yaziKirmizi p-2'>$baslik</h2>"; 
					//echo '<h2 class="yaziKirmizi p-2">$baslik</h2>';
					echo "<h2 class='yaziKirmizi p-2'>".$baslik."</h2>";
				?>
				<h2 class="yaziKirmizi p-2"><?php echo $baslik?></h2>

				<img src="resimler/logoTr.png" style="width:100px;height:100px" />
				<?php
					echo "<img src='$resimYoluAdi' style='width:100px;height:100px' />";
					echo "<img src='".$resimYoluAdi."' style='width:100px;height:100px' />";
				?>
				<img src="<?php echo $resimYoluAdi?>" style="width:100px;height:100px" />

				<p>PamukkaleYBS'yi merak eden sevgili adaylarımız</p>
				<p class="text-start">
					Öncelikle aldığınız puan ve yapacağınız tercihlerin sizler için en iyisi olmasını 
					diliyorum. İnşallah bu aşamayı da atlattığınızda tamamen rahatlamış ve kuş gibi hafiflemiş olacaksınız. Geriye sadece konaklama, barınma ve uyum süreci kalacak. Şunu mutlulukla ifade edebilirim ki şu an YBS bölümlerinin bulunduğu üniversitelerin web sayfalarında dolaşıyorsanız, doğru bir yoldasınız demektir. Çünkü gerçekten YBS, bu nesile özgün bir bölüm. Pamukkale YBS'nin ise ders içeriklerinden, iş imkanına; staj ve yurt dışı fırsatlarından, bölümün konumuna kadar bir çok alanda üstünlükleri vardır. Sayfamızı detaylı inceleyerek bu üstünlükleri fark edeceksiniz. Her şeye rağmen aklınıza takılan tüm sorularınız için başta ben olmak üzere bölümümüzün tüm öğretim üyeleri ile iletişime geçebilirsiniz. Sağlıklı ve sorunsuz bir tercih ve kayıt süreci geçirmeniz dileğiyle,
				</p>
			</div>	
		</div>
	</div>
</body>
</html>