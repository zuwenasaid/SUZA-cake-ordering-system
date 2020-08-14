<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include "head.php" ?>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<!--category-->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">CHOOSE YOUR CAKES</h3>
    <p class="text-center">Delicious cupcake,wedding cake,birthday cake.<br>Order your Cakes Now!</p>
    <ul class="list-group">
      <li class="list-group-item">Cupcake <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">Wedding cake <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">Birthday cake <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/cup1.jpg" alt="cupacake" width="400" height="300">
          <p><strong>Cupcake</strong></p>
          <p>Price 50.000</p>
       <label for="sel1">cake flavuor:</label>
          <form action="customer.php" method="GET">
           <select class="form-control" id="sel1" name="peleka">
        <option value='vanila'>Vanilla</option>
        <option value="strawberry">strawberry</option>
        <option value="orange">Orange</option>
        <option value="ice cream">Ice cream</option>
        <option value="chocolate">Chocolate</option>
           </select>
          </form>
          <button class="btn" type="submit" data-toggle="modal" data-target="#myModal" 
          onclick="location.href='customer.php'">Buy </button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/wed1.jpg" alt="Wedding" width="400" height="300">
          <p><strong>Wedding cake</strong></p>
          <p>Price 70.000</p>
          <label for="sel1">cake flavuor:</label>
           <select class="form-control" id="sel2">
        <option>Vanilla</option>
        <option>strawberry</option>
        <option>Orange</option>
        <option>Ice cream</option>
        <option>Chocolate</option>
           </select>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/birthday.png" alt="bithday" width="400" height="300">
          <p><strong>Birthday cake</strong></p>
          <p>price 10,000</p>
          <label for="sel1">cake flavuor:</label>
           <select class="form-control" id="sel3">
        <option>Vanilla</option>
        <option>strawberry</option>
        <option>Orange</option>
        <option>Ice cream</option>
        <option>Chocolate</option>
           </select>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy </button>
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>