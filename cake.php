
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
  <?php include "menu.php"; ?>
</div>
        <div class="container">
  
      <!-- Modal content-->
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-body" style="padding:30px 40px;">

         <div class="modal-dialog modal-lg">
           <div class="container">
        <div class="row">
        <div class="col-md-9">
          <form  action="insertC.php"  method="POST" class="form-horizontal">
          <h1 style="font-size:23px;padding-left:20%;">Cake Registration</h1>
             <div class="form-group">
            <label class="control-label col-sm-2 " for="cake" >Cake Name:</label>
          <div class="col-sm-5">
             <input type="text" class="form-control" id="fname" name="Cname" placeholder="Enter Cake Name" required>
         </div>
        </div>
        <div class="form-group">

        <label class="control-label col-sm-2 " for="sel1" >Cake Category:</label>
          <div class="col-sm-5">
          <select class="form-control" id="sel2" name=>
        <option>Vanilla</option>
        <option>strawberry</option>
        <option>Orange</option>
        <option>Ice cream</option>
        <option>Chocolate</option>
           </select>
         </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 " for="Dcake" >Cake Description:</label>
          <div class="col-sm-5">
             <input type="text" class="form-control" id="Dcake" name="Dcake" placeholder="Enter Cake Description" required>
         </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 " for="price" >Price:</label>
          <div class="col-sm-5">
             <input type="text" class="form-control" id="fname" name="price" placeholder="Enter Price" required>
         </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 " for="fname" >Quantity:</label>
          <div class="col-sm-5">
             <input type="number" class="form-control" id="fname" name="quantity" placeholder="Enter Quantity" required>
         </div>
        </div>
        
       
		 		<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-default">Save</button>
      </div>
      </div>
	  </form>
    </div>
    <div class="col-md-3">
    <form action="Upload.php" method="post" enctype="multipart/form-data">
       Select image to upload:
       <input type="file" name="fileToUpload" id="fileToUpload">
       <input type="submit" value="Upload Image" name="submit">
</form>

    </div>
       </div>

		  </div>
</div>		  
		   </div> 
             </div>
    </div>
        </div>
    
   
<</body>
</html>