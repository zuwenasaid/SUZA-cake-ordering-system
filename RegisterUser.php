
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
  <div class="container">
  
      <!-- Modal content-->
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-body" style="padding:30px 40px;">
         
           <div class="container">
  
          <form action="InsertUser.php" method="POST" class="form-horizontal">
             <div class="form-group">
            <label class="control-label col-sm-2 " for="email" ><span class="glyphicon glyphicon-user"></span>username:</label>
          <div class="col-sm-5">
             <input type="text" class="form-control" id="email" name="user" placeholder="Enter username" required>
         </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd"><span class="glyphicon glyphicon-eye-open"></span>Password:</label>
          <div class="col-sm-5">          
          <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password" required>
         </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd"><span class="glyphicon glyphicon-eye-open"></span>Password:</label>
          <div class="col-sm-5">          
          <input type="text" class="form-control" id="pwd"  name="role" placeholder="Enter Role" required>
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
      <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
      
    </div>
  </div> 
</div>
</div>

</body>