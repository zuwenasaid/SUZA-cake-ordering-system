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
    
       
    
    <body  >

    <div class="row">
	  <?php include "menu.php"; ?>
	</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/cup3.png" alt="Cupcake" width="1200" height="700">
        <div class="carousel-caption">
          <h3>CUPCAKE</h3>
          <p>Delicious cupcake.</p>
        </div>      
      </div>

      <div class="item">
        <img src="image/wed2.png" alt="wedding" width="1200" height="700">
        <div class="carousel-caption">
          <h3>WEDDING</h3>
          <p>For the best wedding cake, you won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="image/birth1.jpg" alt="Birthday" width="1200" height="700">
        <div class="carousel-caption">
          <h3>BIRTHDAY</h3>
          <p>Enjoy your birthday with our delious cake</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div id="band" class="container text-center">
  <h3>WELCOME TO OUR BAKERY</h3>
  <p><em>We love Cake!</em></p>
  <p>We invite you to enjoy our bakery's deliciously sweet cakes,try our different cake we made every day<br>
		     specifically for you to enjoy a gourmet cupcake,exclusive wedding cake and delicious birthday cake..</p>
  <br>
  <div class="row">
	  <?php include "contact.php"; ?>
    </div>
    

    </body>

</html>
