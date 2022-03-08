<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<style type="text/css">
		.yaziBoyut18{font-size:18px;}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btnGonder").click(function(){
				ogrenciNo=$("#ogrNo").val();  
				adSoyad=$("#adSoyad").val();
				//alert("Öğrenci no:"+ogrenciNo+" Ad Soyad:"+adSoyad);
				$.ajax({
					url:'formAlAjax.php',
					type:'post',
					data:{ogrenciNo_:ogrenciNo,adSoyad_:adSoyad},
					success:function(gelenCevap){
						$("#bilgi").html(gelenCevap);
					}
				});
			});
		});
	</script>
</head>
<body>
	<div class="container mt-3">
			<div class="row">
				<div class="col-2 bg-danger text-white p-2 yaziBoyut18">
					Öğrenci No
				</div>
				<div class="col-3 bg-warning p-2">
					<input type="text" id="ogrNo" class="form-control"/>
				</div>
			</div>
			<div class="row">
				<div class="col-2 bg-danger text-white p-2 yaziBoyut18">
					Ad Soyad
				</div>
				<div class="col-3 bg-warning p-2">
					<input type="text" id="adSoyad" class="form-control"/>
				</div>
			</div>
			<div class="row">
				<div class="col-5 bg-danger p-2">
					<button class="btn btn-warning text-white" id="btnGonder">Gönder</button>
				</div>
			</div>
			<div class="row" id="bilgi">
				
			</div>
	</div>
</body>
</html>