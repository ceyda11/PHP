<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		basNo=0;
		bitNo=4;
		$(".onceki_li").addClass("disabled");

		$(".onceki").click(function(){
			$(".sonraki_li").removeClass("disabled");
			if (basNo!=0){
			basNo=basNo-4;
			bitNo=bitNo-4;
			$.ajax({
				url:'kayitGetir.php',
				type:'post',
				data:{basNo_:basNo,bitNo_:bitNo},
				success:function(kayitlar){
					$(".urunler").html(kayitlar);
				}
			});
		}
		else
		{
			$(".onceki_li").addClass("disabled");
		}
		});
		
		$(".sonraki").click(function(){
			$(".onceki_li").removeClass("disabled");
			basNo=basNo+4;
			bitNo=bitNo+4;
			$.ajax({
				url:'kayitGetir.php',
				type:'post',
				data:{basNo_:basNo,bitNo_:bitNo},
				success:function(kayitlar){
					$(".urunler").html(kayitlar);
					$.ajax({
						url:'kayitSayisiGetir.php',
						type:'post',
						success:function(ks){
							if (ks<bitNo){
								$(".sonraki_li").addClass("disabled");
							}
						}
					});
				}
			});
		});
	});
</script>
<body>
 
<div class="container mt-3">
	<div class="row">
		<div class="col-12">
			<div class="row urunler">
				<?php
				$db=new mysqli("localhost","root","","sayfalama");
				$db->set_charset("utf8");
				$sorgu="select * from urunler order by urunId limit 0,4";
				$sonuc=$db->query($sorgu);
				$sayfaBasiHucre=4;
				for($i=0;$i<$sayfaBasiHucre;$i++){
					$kayit=$sonuc->fetch_assoc();
					echo "<div class='col'>";
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

			</div>
		</div>
		<div class="col-12 my-2">
			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center">
			    <li class="page-item onceki_li"><a class="page-link onceki" href="#">Önceki</a></li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item sonraki_li"><a class="page-link sonraki" href="#">Sonraki</a></li>
			  </ul>
			</nav>
		</div>		
	</div>
</div>	 
</body>
</html>