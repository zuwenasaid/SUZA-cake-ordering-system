<?php
session_start();
include('session.php');
include 'methods.php';
$obj = new cake();

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $catID = $_POST['catID'];
    $quantity = $_POST['quantity'];
    $desc = $_POST['desc'];
    $obj->addCake($name,$catID,$price,$quantity,$desc);
    header("location:viewCake.php");
    //$file=$_FILES['cakeImage'];
    //$path = 'image/';
            

    
    //echo $file["name"];
    
    //$errors=array();
    //$obj->file_uploaded($file,$path);
    //if(!empty($errors)){
        //foreach($errors as $key => $error){echo $error;}
    //}else{
        //$FullPath=$path.$file["name"];

       //}
        //move_uploaded_file($file['tmp_name'], $FullPath);
        
    //}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

      

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="mystyle.css" rel="stylesheet">
          <!-- jQuery -->
          <script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>
       
    </head>
    
       
    
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="row">
	  <?php include "menuAdmin.php"; ?>
	</div>

    <div class="container" style="margin-left:40px;margin-top: 70px;">
				
				<div class="panel-body">
                    <form action="#" method="post" autocomplete="off">
                        <div class="row">
                            <div class="col-md-9">    
                            <div class="row">
                                <div class="col-md-6">
                                        <label><b>Cake Name</b></label>
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                                

                                <div class="col-md-5">
                                    <label><b>Category</b></label>
                                        <select  name = "catID" class = "form-control" required>
                                                <option value=" ">Please Select Here</option>
                                                <?php   
                                                
                                                foreach ($obj->viewCategory() as $cat) {
                                                ?>                                                                              
                                                <option value = "<?php echo $cat['catID'];?>"><?php echo $cat['catName'];?></option>  
                                                <?php } ?>                                                               
                                            </select>
                                </div>    

                        </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label><b>Price</b></label>
                                    <input type="text" name="price" required class="form-control">
                                </div>

                                <div class="col-md-5">
                                    <label><b>Quantity</b></label>
                                    <input type="number" name="quantity" required class="form-control">
                                </div>
                            </div><br>

                            <div class="row">    
                                <div class="col-md-11">
                                        <label><b>Cake Description</b></label>
                                        <textarea class="form-control" rows="5" required   name="desc"></textarea>
                                </div>
                                

                        </div><br>

                            
                            </div>

                            <div class="col-md-3">
                                    <div class="responsive" style="width:250px;float:left">
                                    <label><b><center>Cake Image</center></b></label>
                                        <div class="image-box" style="height:200px;">
                                            <img  alt="Cake Image" src="image/birthday.png"  id="img" style="width:250px;height:200px;" class="card-img-top mb-1 patient-img img-fluid img-thumbnail">
                                            <input type="file"  name="cakeImage" id="image">
                                        </div>
                                                                
                                    </div>
                            </div>
                    </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="viewCake.php" class="btn btn-danger btn-danger btn-block "><span>  Cancel</span></a>
                                    
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success btn-block" name="register">Save</button>
                                    
                                </div>
                            </div>
                        </div>
                        
                            
                </form>
				
            </div>
</div>
    
<script>
            function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});
          
            </script>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
		
		<!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
		
		 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
