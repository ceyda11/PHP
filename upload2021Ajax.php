<!DOCTYPE html>
<html>
<head>
	<title></title>
	 	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css" >			
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
		
	<script type="text/javascript">
		$(document).ready(function(){
			$("#resimUpload").change(function(){
				//c:\fakepath\xxxx.yyy şeklindeki ifadeyi \ karakterine göre parçalar ve dizi olarak saklar. Dizinin 0. elemanı C:, 1. elemanı fakepath, 2. elemanı ise seçilen dosyanın adı ve uzantısıdır(xxxx.yyy)
				//pop fonksiyonu parçalanan dizinin son elemanını yani dosya adı ve uzantısını almamızı sağlar.
				secilenDosya=$(this).val().split("\\").pop();
				$("#secilenresim").val(secilenDosya);
			});

			$("#uploadBtn").click(function(){
				var dosyaVeri = $('#resimUpload').prop('files')[0]; 
    			var formVeri = new FormData();                  
    			formVeri.append('file', dosyaVeri);

    			 $.ajax({
	              url: 'upload2021Cevap.php',
                  type: 'post',                       
                  data: formVeri,                     
                  contentType: false,
                  processData: false,
                  success: function(gelenCevap){
					$("#secilenResimAlani").html("<div class='col-12 border border-secondary p-2 rounded mt-1 text-center'><img src='"+gelenCevap+"' class='img-fluid'/></div>");
				  }
			});
			});
		});
	</script>	
</head>
<body>
<div class="container my-3 ">
	<div class="row justify-content-center">
		<div class="col-8 bg-secondary text-white rounded fs-4 fst-italic fw-bold text-center p-2">
			AJAX DOSYA YÜKLE (UPLOAD)
		</div>
		<div class="col-8 border border-secondary rounded mt-1 p-2">
			<div class="row p-1">
				<div class="col-5 p-2">
					<input type="text" placeholder="Seçilen Dosya" class="form-control" id="secilenresim" disabled="true" />
				</div>
				<div class="col-3 p-2">
					<label class="btn btn-danger">
						Gözat<input type="file" class="d-none" id="resimUpload" />
					</label>
				</div>
				<div class="col-12 p-2">
					<button class="btn btn-warning" id="uploadBtn">Yükle</button>
				</div>
			</div>	
		</div>
		<div class="col-8">
			<div class="row" id="secilenResimAlani">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>