<?php
          // MYSQL FETCHING CODE 
          require_once "connection.php";
          session_start();
  $stmt = $pdo->query("SELECT catID,catName FROM category");// QUERY FOR DISPLAYING SINGLE REQUESTER
  $count=$stmt->num_rows;
?>
<!-- REGISTER BUTTON -->
<?php 
  if (isset($_GET['exist'])) {
    echo '<span class="pull-right label label-danger">'.$_GET["exist"].'</span>';
  }
?>
<h2 class="text-center">VIEW CATEGORY
  <button class="pull-right btn btn-success" type="button" data-toggle="modal" data-target="#myModal" data-backdrop="static">
    ADD CATEGORY
  </button>
</h2>
<?php
# CHECKING DATA IF THEY ARE AVAILABLE IN MYSQL DATABASE
  if ($count==0) {
    echo "NO DATA";
  }else{
?>
<div class="table-responsive">
<table  id="example" class="table table-hover">
  <thead>
  <tr>
    <th>DEPARTMENT NAME</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
  </thead>
  <tfoot>
  <tr>
    <th>DEPARTMENT</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
  </tfoot>
  <tbody>
  <?php
    # RETRIEVING DATA IN MYSQL
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
  ?>            
  <tr>
    <td><?php echo $row['catName']?></td>          
    <td>
      <a href="departmentEdit.php?edit=<?php echo $row['catID'] ?>">
        <button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span> EDIT</button>
      </a>
    </td>
    <td>
      <a href="delete_department.php?del=<?php echo $row['catID'] ?>"
      onclick="return del()">
        <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> DELETE</button>
      </a>
    </td>
  </tr>
  <?php 
    }# END OF RETRIEVING 
  ?>
  </tbody>
</table>
</div>
<?php 
  }# END OF CHECKING DATA 
?>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- popup content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-user"></span> ADD NEW Category</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="catTable.php" method="post">
            
            <div class="form-group">
              <?php
                if (isset($_GET['exist'])) {
                  echo '<p align="center" class="alert alert-danger">'.'<strong>'.$_GET["exist"].'</strong>'.'</p>';
                }
                ?>
              <label for="name"> Category</label>
              <input type="text" name="dept" class="form-control" id="name" placeholder="Enter Category Name" required="required">
            </div>
            
            <button type="submit" name="save" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> SAVE DATA</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal">
            <span class="glyphicon glyphicon-off"></span> Cancel
          </button>
        </div>
      </div>
      
    </div>
  </div> 

  <script>
  $(document).ready(function(){
      $("#myBtn").click(function(){
          $("#myModal").modal();
      });
  });
  </script>
