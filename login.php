<?php
   include("databaseconnection/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link, $_POST['username']);
      $mypassword = mysqli_real_escape_string($link, $_POST['password']); 
      
      $sql = "SELECT user_id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result);
      // $active = $row['active'];
      
      $id=$row['user_id'];
      $count = mysqli_num_rows($result);
    
      if ($count == 0) {	
	  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
	  document.location='login.php'</script>";
	  } elseif ($count > 0){
	  	 $_SESSION['id_in_login']=$id;
	  	 header("location: file/gallery.php");	
	  }

      // If result matched $myusername and $mypassword, table row must be 1 row
		
      // if($count == 1) {
      //    // session_register($myusername);
      //    $_SESSION['login_user'] = $myusername;
         

      //    header("location: file/gallery.php");
      // }else {
      //    $error = "Your Login Name or Password is invalid";
      // }
   }
	 	
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link rel="stylesheet" type="text/css" href="css/loader.css">

</head>
<body>
	<div class="container">
		
		<div class="row">

			<div row="col l4 s4 m4">
				
			</div>

				<div class="container">
					<div class="row" style="width: 70%; padding-top:150px;">
						<form action= "" method= "post">
							<div class="center">
								<img class="responsive-img" src="img/picto.png">
							</div>
							<div row="col l4 s4 m4">
								
								
								
									<div class="center">
										<div class="input-field">
									          <input  id="username" type="text" class="validate" name="username">
									          <label for="username">Username</label>
						        		</div>
						        		<div class="input-field">
									          <input  id="password" type="password" class="validate" name= "password">
									          <label for="password">Password</label>
						        		</div>
									</div>

						
							</div>
							<br>
							<div class="row">
					  			<div class="col l12 m12 s12 center">
					  				<button class="waves-effect waves-light btn" style="width: 30%;" type="submit">Log In</button>
					  			</div>
	  						</div>

  						</form>	

					</div>

				</div>

				
			<div row="col l4 s4 m4">	
			</div>

		</div>

	</div>


	 <script src="js/jquery-3.3.1.js"></script>	
	 <script src="js/materialize.js"></script>
 	 <script src="js/init.js"></script>

 	 
</body>
</html>