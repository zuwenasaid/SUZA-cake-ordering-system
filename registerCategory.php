<?php
session_start();
include('session.php');
include 'methods.php';
$obj = new cake();

if (isset($_POST['register'])) {
    $cat = $_POST['catName'];
    
    
    $obj->addCategory($cat);
    header("location:registerCategory.php");
}

if (isset($_POST['update']))
	{ 
	 $id = $_POST['catID'];
	 $catName = $_POST['catName'];    
	 $obj->updateCategory($id,$catName);
	 
	header("location:registerCategory.php");
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

    <div style="margin-top: 70px;">
                <div class="container-fluid" style="margin-left:20px;">
				
				<div class="row">
				
				<form action="#" method="post" role="form">
				<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                     <input name="catName" class="form-control" id="role" placeholder="Enter Catgory Name" required/>
                    </div>
					 <button type="submit" class="btn btn-primary" name="register">Add Category</button>
                </div>        
				
				</form>
				
				</div>
				<div class="row" style="padding-top:25px;">
					
					
										
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                                Registered Cake Category
                            </div>
                            <!-- /.panel-heading -->
							<div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
						<thead>
                        <tr>
                            <th>SN</th>
                            <th>Category Name</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                    <?php
									$i=1;
                                    foreach ($obj->viewCategory() as $cat) {
                                        ?>
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $cat['catName'];
                                                ?>
                                            </td>
                                            <td>
											<a href="#update<?php echo $cat['catID'] ?>" class="btn btn-success btn-md" data-toggle = "modal" data-target="#update<?php echo $cat['catID'] ?>"><i class = "fa fa-pencil"></i> Edit</a> &nbsp &nbsp &nbsp &nbsp 
											<a href="deleteCategory.php?id=<?php echo $cat['catID'] ?>"class="btn btn-danger btn-md" onclick="return confDelete()"><i class = "fa fa-trash"></i> Delete</a>
											</td>
											
										</tr>
										<div class="modal fade" id="update<?php echo $cat['catID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> Update Category Information<h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action = "#"> 
												<input type="hidden" name="catID" value="<?php echo $cat['catID'];?>">
												<label>Category Name</label>
												<input type="text" name = "catName" class="form-control" value = "<?php echo $cat['catName'];?>" required>
												<br/>								
								                
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  type="submit" class="btn btn-primary" name="update">Save changes</button>
												</form>
                                            </div>
                                            <div class="modal-footer">
                                                
                                            </div>
										    	
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
								    <?php
									$i++;
                                    }
                                    ?>
											
                        </tbody>
						</table>
					</div>
					
                </div>
                
						</div>
					</div>
				</div>            

            </div>
				</div>
			</div>
	</div>
    <!-- /#wrapper -->
    
    <script type="text/javascript">
		function confDelete(){
			
				return confirm("Do you want to delete this record ?");

		}
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
