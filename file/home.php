<?php
   include('../session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>

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


     <script src="../js/jquery-3.3.1.js"></script>	
	 <script src="../js/materialize.js"></script>
 	 <script src="../js/init.js"></script>
 	 <script src="../js/jquery.dataTables.min.js"></script>
 	 <script src="../js/dataTables.material.min.js"></script>
   </body>
   	
</html>