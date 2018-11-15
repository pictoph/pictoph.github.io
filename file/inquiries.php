<?php session_start();
if(empty($_SESSION['id_in_login'])):
header('Location: ../login.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materializeGallery.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/galleryStyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     <link href="../css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 </head>

   <?php include('../databaseconnection/config.php');
      ?>

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
        
        </li>
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
    <br>
    <main>
    <div class="container">
        <br>
        <div class="row">
          <div class="col l12 m12 s12">
            <a class="btn btn-floating pulse right modal-trigger"  data-toggle="modal" data-target="addModal" title="Add Record" data-toggle="tooltip"><i class="material-icons">add</i></a>
          </div>
        </div>

        <div class="row"> 
           <div class='col l12 m12 s12'>
              <table id='example1' class='mdl-data-table' style='width:100%'>

                  <thead>

                      <tr>
                          <th>Name</th>
                          <th>Lastname</th>
                          <th>Phone</th>
                          <th>Email Address</th>
                          <th>Action</th>
                      </tr>

                      <tbody>
                          
                        <?php
                            $sql = "SELECT * FROM inquiries where status = 'A' ";
                            $result = mysqli_query($link, $sql) or die(mysqli_error());
                            
                            $i=1;
                            while($row=mysqli_fetch_array($result)){
                            $cid=$row['inquiries_id'];
                        ?>

                        <tr>
                           <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                           <td><?php echo "0" . $row['phone'];?></td>
                           <td><?php echo $row['email_address'];?></td>

                           <td>
                            <a href='#updateModalAction<?php echo $row['inquiries_id'];?>' 
                              data-toggle='modal' data-target='updateModalAction<?php echo $row['inquiries_id'];?>'  class='modal-trigger'
                              title='Update Record' data-toggle='tooltip'><i class='material-icons'>edit</i></a>

                           <a href='#deleteModal<?php echo $row['inquiries_id'];?>' class='modal-trigger' data-toggle='modal' data-target='deleteModal<?php echo $row['inquiries_id'];?>'
                              title='Delete Record' data-toggle='tooltip'><i class='material-icons'>delete</i></a>
                          </td>
                          
                          </tr>

                         <!-- update modal -->
                         <div class='modal' id='updateModalAction<?php echo $row['inquiries_id'];?>' style="display: none;">
                           
                          <form method="post" action="inquiries_update.php" enctype='multipart/form-data'>
                            <div class='modal-content'>

                              <div class='input-field'>
                                <input  type="hidden" class="validate" id="id" name="id" 
                                value="<?php echo $row['inquiries_id'];?>" required
                                >
                              </div> 

                              <div class='input-field'>
                                <input  id='firstname' type='text' class='validate' name='firstname' value="<?php echo $row['firstname'];?>"
                                >
                                  <label for='firstname'>Firstname</label>
                              </div>              

                              <div class='input-field '>
                                  <input  id='lastname' type='text' class='validate' name= 'lastname' value="<?php echo $row['lastname'];?>"
                                 >
                                  <label for='lastname'>Lastname</label>
                              </div>

                              <div class='input-field'>
                                  <input  id='phoneno' type='number' class='validate' name='phone'
                                  value="<?php echo $row['phone'];?>"
                                 >
                                  <label for='phoneno'>Phone no.</label>
                              </div>

                            <div class='input-field'>
                                <input  id='emailaddress' type='email' class='validate' name= 'emailaddress' value="<?php echo $row['email_address'];?>"
                                >
                                <label for='emailaddress'>Email Address</label>
                            </div>
                        </div>

                        <div class='modal-footer'>
                          <button  type="button" class='modal-action modal-close waves-effect waves-green btn-flat' >Cancel</button>
                          <button  class='modal-action modal-close waves-effect waves-green btn-flat' type="submit">Update</button>
                       </div>

                      </form> 
                  </div> 


                   <!-- delete modal  -->
                   <div id="deleteModal<?php echo $row['inquiries_id'];?>" class="modal" style="display: none;">

                     <form method="post" action="inquiries_delete.php" enctype='multipart/form-data'>
                          <div class="modal-content">
                              <br>
                              <br>

                              <div class='input-field'>
                                <input  type="hidden" class="validate" id="id" name="id" 
                                value="<?php echo $row['inquiries_id'];?>" required
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
                   

                      <?php $i++;}?>  
                      </tbody>

                  </thead>

              </table>  
           </div>
        </div>



     </div>
     </main>

 
     <div id="addModal" class="modal">
         <form method="post" action="inquiries_add.php" enctype='multipart/form-data'>
            <div class="modal-content">
                <div row="col l4 s4 m4">
                  
                <div class="input-field">
                        <input  id="firstname" type="text" class="validate" name="firstname">
                        <label for="firstname">Firstname</label>
                    </div>
                    <div class="input-field">
                        <input  id="lastname" type="text" class="validate" name= "lastname">
                        <label for="lastname">Lastname</label>
                    </div>
                    <div class="input-field">
                        <input  id="phoneno" type="text" class="validate" name= "phoneno" maxlength="11">
                        <label for="phoneno">Phone no.</label>
                    </div>
                    <div class="input-field">
                        <input  id="emailaddress" type="email" class="validate" name= "emailaddress">
                        <label for="emailaddress">Email Address</label>
                    </div>

              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</button>
              <button type="submit" name="submit" class="waves-effect waves-green btn-flat">Save</button>
            </div>

            </form>  
        </div>
        

   <script src="../js/jquery-3.3.1.js"></script>  
   <script src="../js/materialize.js"></script>
    <script src="../js/materialize.min.js"></script>
   <script src="../js/init.js"></script>
   <script src="../js/jquery.dataTables.min.js"></script>
   <script src="../js/dataTables.material.min.js"></script>
    
    <script>
      $(function () {
        // $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
     <script>
     
    </script>
  </body>
</html>
