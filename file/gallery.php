<?php session_start();
if(empty($_SESSION['id_in_login'])):
header('Location: ../login.php');
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">


	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materializeGallery.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link href="../css/galleryStyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	 <link href="../css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
		<header>
			<div class="navbar-fixed">
				<nav class="white top-nav" role="navigation">
					<div class="nav-wrapper">
						<div class="col l12 right">
                          <span class="center"><h6 class="" style="color: #757575;">Hi Admin</h6></span>
						</div>
					</div>
				</nav>
			</div>
                
			<!-- Sidenav menu  -->
			<ul class="side-nav sidenavmenu fixed" id="slide-out">
			
				<li>
					<a href="gallery.php"><i aria-hidden="true" class="fa fa-user"></i>Galleries</a>
				</li>

				<li class="active">
					<a href="inquiries.php"><i aria-hidden="true" class="fa fa-calendar-plus-o"></i>Inquiries</a>
				</li>

                <li>
					<a href="../login.php" class="btn-logout"><i aria-hidden="true" class="fa fa-power-off"></i>Logout</a>
				</li>
			
			</ul>
		</header>


		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12">
					<div class="col l3 m3 s3 center"></div>
					<div class="col l2 m2 s2 center">
						 <a class="waves-effect waves-light btn modal-trigger" href='uploadPhoto' data-toggle='modal' data-target='uploadPhoto'
                              title='Upload Image' data-toggle='tooltip'>Upload Photo</a>
					</div>
				</div>
			</div>

		</div>
		
		 <div id="uploadPhoto" class="modal" style="display: none;">
               <form method="post" action="insert_image.php" enctype='multipart/form-data'>
                          <div class="modal-content">
                          		<h4>Upload Image</h4>
                              <br>
                              <br>

                             <div class = "file-field input-field">
				                  <div class = "btn">
				                     <span>Choose File</span>
				                     <input type = "file" name="image" multiple />
				                  </div>	              
					                  <div class = "file-path-wrapper">
					                     <input class = "file-path validate" type = "text"
					                        placeholder = "filename" />
					              </div>
               				</div> 

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</button>
                            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Save</button>
                          </div>

                     </form> 
                    </div> 	

	

		<div class="section-edit">
			<div class="container">

			<div class="row">
				<?php
					include('../databaseconnection/config.php');

	                $sql = "SELECT * FROM images where status = 'A' ";
	                $result = mysqli_query($link, $sql) or die(mysqli_error());
	                
	                $i=1;
	                while($row=mysqli_fetch_array($result)){
	                $cid=$row['images_description'];

               	?>

					<div class="col l3 m3 s3 center">
						
					</div>
					<div class="col l3 m3 s3">
						 <div class="card">
						     <div class="card-image">
						          <img src="../upload/images/<?php echo $row['images_description'];?>">
						          <a class="btn-floating halfway-fab waves-effect waves-light red modal-trigger" href='#deleteRedIcon<?php echo $row['images_id'];?>' data-toggle='modal' data-target='deleteRedIcon<?php echo $row['images_id'];?>'><i class="material-icons">delete</i></a>
						      </div>

						      <div class="card-content"> </div>
						      
						    
						 </div>
					</div>
	
	
					
					<!-- delete modal  -->
                   <div id="deleteRedIcon<?php echo $row['images_id'];?>" class="modal" style="display: none;">

                     <form method="post" action="images_delete.php" enctype='multipart/form-data'>
                          <div class="modal-content">
                              <br>
                              <br>

                              <div class='input-field'>
                                <input  type="hidden" class="validate" id="id" name="id" 
                                value="<?php echo $row['images_id'];?>" required
                                >
                              </div> 

                              <h5 class="center" style="color:red;">Are you sure you want to delete this?</h5>    
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</button>
                            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Delete</button>
                          </div>

                     </form> 
                    </div> 

			<?php

	               	$i++;			
			}?>  
				</div>
		</div>
		</div>

		
	 <script src="../js/jquery-2.1.1.min.js"></script>	
	 <script src="../js/materialize.js"></script>
 	 <script src="../js/init.js"></script>

</body>
</html>