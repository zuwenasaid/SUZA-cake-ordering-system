
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
  
          <form  action="insertCustomer.php"  method="POST" class="form-horizontal">
          <h1 style="font-size:23px;padding-left:20%;">Customer Registration</h1>
             <div class="form-group">
            <label class="control-label col-sm-2 " for="fname" >First Name:</label>
          <div class="col-sm-5">
             <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>
         </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Last Name:</label>
          <div class="col-sm-5">          
          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
         </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="add">Address:</label>
          <div class="col-sm-5">          
          <input type="text" class="form-control" id="add" name="address" placeholder="Enter Address" required>
         </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="tel">Phone number:</label>
          <div class="col-sm-5">          
          <input type="tel" class="form-control" id="tel" name="phone" placeholder="Enter Phone number" required>
         </div>
         </div>
		 		<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-default">Save</button>
      </div>
      </div>
	  </form>
       

		  </div>
</div>		  
		   </div> 
             </div>
    </div>
        </div>
    
   
<</body>
</html>