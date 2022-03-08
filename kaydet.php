<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#resimUpload").change(function(){
				secilenDosya=$(this).val().split("\\").pop();
				$("#secilenresim").val(secilenDosya);
			});

			$("#kaydet").click(function(){
				urunAdi=$("#urunAdi").val();
				urunGorsel="kaydedilen/"+$("#secilenresim").val();
				urunFiyat=$("#urunFiyat").val();

				var dosyaVeri = $('#resimUpload').prop('files')[0]; 
    			var formVeri = new FormData();                  
    			formVeri.append('file', dosyaVeri);
    			$.ajax({
    				url: 'kaydetCevap.php',
    				type:'post',
    				data:{urunAdi_:urunAdi,urunGorsel_:urunGorsel,urunFiyat_:urunFiyat},
    				success:function(gelenCevap){
    					if(gelenCevap)
    						{
    						 $.ajax({
					              url: 'upload2021Cevap.php',
				                  type: 'post',                       
				                  data: formVeri,                     
				                  contentType: false,
				                  processData: false,
				                  success: function(gelenCevap){
									
								  }
							});
				    						}
    					else
    						alert("Kayıt İşlemi Başarısız");
    				}
    			});

    	
			});
		});
	</script>	

</head>
<body>
<div class="container mt-5">
	<div class="row">
		<div class="col-6 rounded bg-danger text-center p-2 text-light fw-bold fst-italic fs-3">
			ÜRÜN KAYIT
		</div>
	</div>
	<div class="row mt-1">
		<div class="col-6 rounded border border-secondary ">
			<div class="row p-2">
				<div class="col-3 p-1"><label>Ürün Adı</label></div>
				<div class="col-6 p-1"><input type="text"  class="form-control" id="urunAdi" /></div>
				<div class="w-100"></div>
				<div class="col-9 my-1 rounded border bg-light">
						<div class="row p-3">
							<div class="col-6  p-0">
								<input type="text" class="form-control" placeholder="Seçilen Dosya" id="secilenresim" disabled="true" />
							</div>
							<div class="col-3">
								<label class="btn btn-warning">
							  		<input type="file" class="d-none" id="resimUpload">Gözat
								</label>  
							</div>
						</div>
				</div>
				<div class="w-100"></div>
				<div class="col-3 p-1"><label>Ürün Fiyat</label></div>
				<div class="col-6 p-1"><input type="text" class="form-control" id="urunFiyat" /></div>

				<div class="col-12 p-1"><button class="btn btn-danger" id="kaydet">Kaydet</button></div>
			</div>	
		</div>	
			

		</div>	
	</div>
</div>
</body>
</html>