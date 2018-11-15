<?php session_start();
if(empty($_SESSION['login_user'])):
header('Location:../index.php');
endif;

include('../databaseconnection/config.php');
	$id = $_POST['id'];
	$active = "I";

	mysqli_query($link,"update inquiries set status='$active' where inquiries_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully delete inquiries details!');</script>";
	echo "<script>document.location='inquiries.php'</script>";  
	
	
?>
