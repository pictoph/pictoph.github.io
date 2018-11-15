<?php session_start();
if(empty($_SESSION['login_user'])):
header('Location:../login.php');
endif;

include('../databaseconnection/config.php');
	$id = $_POST['id'];
	$active = "I";

	mysqli_query($link,"update images set status='$active' where images_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully delete image!');</script>";
	echo "<script>document.location='gallery.php'</script>";  
	
	
?>
