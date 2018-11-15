<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../databaseconnection/config.php');
	$id = $_POST['id'];
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$phone = $_POST['phone'];
	$emailaddress = $_POST['emailaddress'];

	mysqli_query($link,"update inquiries set firstname='$firstname', lastname='$lastname',phone='$phone',email_address='$emailaddress' where inquiries_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated inquiries details!');</script>";
	echo "<script>document.location='inquiries.php'</script>";  
	
	
?>
