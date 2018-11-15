<?php 

include('../databaseconnection/config.php');
	
	$active = "A";	
			$pic = $_FILES["image"]["name"];
			if ($pic==""){
				$pic="default.gif";
			}else{
				$pic = $_FILES["image"]["name"];
				$type = $_FILES["image"]["type"];
				$size = $_FILES["image"]["size"];
				$temp = $_FILES["image"]["tmp_name"];
				$error = $_FILES["image"]["error"];
			
				if ($error > 0){
					die("Error uploading file! Code $error.");
					}
				else{
					if($size > 100000000000) //conditions for the file
						{
						die("Format is not allowed or file size is too big!");
						}
				else
				      {
					move_uploaded_file($temp, "../upload/images/".$pic);
				      }
					}
			}	

			mysqli_query($link,"INSERT INTO images (images_description, status) 
			VALUES ('$pic' , '$active')")or die(mysqli_error($link));

	echo "<script type='text/javascript'>alert('Successfully added new image!');</script>";
	echo "<script>document.location='gallery.php'</script>";  
?>