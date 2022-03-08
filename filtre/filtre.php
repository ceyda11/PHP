<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var dizi=[];
			$("#btnSorgula").click(function(){
				$.each($(".cbFiyat:checked"),function(){
					dizi.push($(this).val());
				});

				$.ajax({
					url:'filtreAl.php',
					type:'post',
					data:{dizi_:dizi},
					success:function(gelenCevap){
						$("#urunler").html(gelenCevap);
					}
				});
			});
			


		});
	</script>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-12 bg-danger rounded text-white text-center p-2 fw-bold 	            fs-4 fst-italic">
			ÜRÜNLER
		</div>  
	</div>
	<div class="row mt-1">
		<div class="col-2 border border-secondary rounded">
			<h6 class="">Fiyat Aralığı</h6>
			<div class="form-check py-1">
				  <input class="form-check-input cbFiyat" type="checkbox" value="0">
				  <label class="form-check-label" for="flexCheckDefault">
				    0-1000 TL
				  </label>
			</div>
			<div class="form-check py-1">
				  <input class="form-check-input cbFiyat" type="checkbox" value="1">
				  <label class="form-check-label" for="flexCheckDefault">
				    1001-2000 TL
				  </label>
			</div>
			<div class="form-check py-1">
				  <input class="form-check-input cbFiyat" type="checkbox" value="2">
				  <label class="form-check-label" for="flexCheckDefault">
				    2001-3000 TL
				  </label>
			</div>
			<div class="form-check py-1">
				  <input class="form-check-input cbFiyat" type="checkbox" value="3">
				  <label class="form-check-label" for="flexCheckDefault">
				    3001-4000 TL
				  </label>
			</div>
			<div class="form-check py-1">
				  <input class="form-check-input cbFiyat" type="checkbox" value="4">
				  <label class="form-check-label" for="flexCheckDefault">
				    4001-5000 TL
				  </label>
			</div>

			<button class="btn btn-danger my-2" id="btnSorgula">Sorgula</button>
		</div>
		<div class="col-10 border border-secondary rounded">
			<div class="row p-2" id="urunler">

			</div>
		</div>
	</div>
</div>
</body>
</html>