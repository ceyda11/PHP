<?php

move_uploaded_file($_FILES["file"]["tmp_name"], "kaydedilen/".$_FILES["file"]["name"]);
echo "kaydedilen/".$_FILES["file"]["name"];
			
?>