<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
	include("../databaseconnection/config.php");

	// $firstname = $_POST['firstname'];
	// $lastname = $_POST['lastname'];
	// $phoneno = $_POST['phoneno'];
	// $emailaddress = $_POST['emailaddress'];	
	$active = 'A';
	$zero = '0';

		if(isset($_POST['submit']))
		{
		 $sql = "INSERT INTO inquiries (firstname, lastname, phone, email_address, status)
				VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["phoneno"]."', '".$_POST["emailaddress"]."', '$active')";

			$result = mysqli_query($link,$sql);	 

		}
		mysqli_close($link);


	echo "<script type='text/javascript'>alert('Successfully added new inquiries!');</script>";
	echo "<script>document.location='inquiries.php'</script>";  
	
?>