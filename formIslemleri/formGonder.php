<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.yaziBoyut18{font-size:18px;}
	</style>
</head>
<body>
	<div class="container mt-3">
		<form action="formAl.php" method="post">
			<div class="row">
				<div class="col-2 bg-danger text-white p-2 yaziBoyut18">
					Öğrenci No
				</div>
				<div class="col-3 bg-warning p-2">
					<input type="text" name="ogrNo" class="form-control"/>
				</div>
			</div>
			<div class="row">
				<div class="col-2 bg-danger text-white p-2 yaziBoyut18">
					Ad Soyad
				</div>
				<div class="col-3 bg-warning p-2">
					<input type="text" name="adSoyad" class="form-control"/>
				</div>
			</div>
			<div class="row">
				<div class="col-5 bg-danger p-2">
					<button class="btn btn-warning text-white" type="submit">Gönder</button>
				</div>
			</div>
		</form>	
	</div>
</body>
</html>