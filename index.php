<html lang ="en-US">
<head>
  <link rel="stylesheet" href="design.css"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

                       <!--Style for the top image and navigation items --->

</head>
<body>
<script src="script.js"></script>
                     <!-- CSS for the top navbar-->
<style>
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size:cover;
  -o-background-size:cover;
  background-size:cover;
}
</style>


                        <!-- Navigation with image -->
<nav class="navbar navbar-expand-lg  fixed-top" style="background-color:#001f3f;" >
<div class="container"  >
    <a class="navbar-brand" class="carousel-caption d-none d-md-block"style="color: white; font-family:Monospace"><h3>Name of Hotel</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
    <span  ><i class="fas fa-bars" style="color: white;"></i></span>
    </button>
<div class="collapse navbar-collapse" id="navbarResponsive">
 <ul class="navbar-nav ml-auto">
   <li class="nav-item">
   <a class="nav-link"><button class="btn btn-outline-warning" data-toggle="modal" data-target="#myModalOrder">My Order</button></a>
   </li>
   <li class="nav-item">
<a class="nav-link"><button class="btn btn-outline-warning"data-toggle="modal" data-target="#myModalCart">My Cart</button></a>
    </li>
    <li class="nav-item">
     <a class="nav-link" ><button class="btn btn-outline-warning"data-toggle="modal" data-target="#myModal">My Bill</button></a>
     </li>
 </ul>
 </div>
 </div>
</nav>

<header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
<div class="carousel-inner" role="listbox" style=" -webkit-animation-delay:2s;">
                       <!-- Slide One - Set the background image for this slide in the line below -->
<div class="carousel-item active" style="background-image: url(home1.jpg)">
<div class="carousel-caption d-none d-md-block">
 <!--<h2 class="display-4">Welcome,Name</h2> -->
</div>
</div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
<div class="carousel-item" style="background-image: url(home2.jpg)">
<div class="carousel-caption d-none d-md-block">
</div>
</div>
                         <!-- Slide Three - Set the background image for this slide in the line below -->
<div class="carousel-item" style="background-image: url(home3.jpg)">
<div class="carousel-caption d-none d-md-block">
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
</a>
</div>
</header>

                          <!-- MODEL FOR MY ORDER--->

<div class="modal fade" id="myModalOrder">
<div class="modal-dialog modal-dialog-centered modal-xl">
<div class="modal-content">
      
                           <!-- Modal Header -->
<div class="modal-header"style="color:white;background-color:#001f3f;">
<h4 class="modal-title"style="text-align: center;">YOUR ORDER</h4>
<button type="button" class="close" style="background-color:red;" data-dismiss="modal">X</button>
</div>
        
                           <!-- Modal body -->
<div class="modal-body">
<table class="table table-striped" style="padding: 0;">
<thead>
<tr>
    <th>S.N</th>
    <th>Particulars</th>
    <th>Qty</th>
    <th>Rate</th>
    <th>Total</th>
</tr>
</thead>

<?php

  include 'conn.php'; 
 $q = "select * from myorder ";

  $query = mysqli_query($con,$q);
$a=0;
  while($res = mysqli_fetch_array($query)){
 ?>

 <tr>
 <td> <?php echo $res['itemid'];  ?> </td>
 <td> <?php echo $res['sub1'];  ?> </td>
 <td> <?php echo $res['quantity'];  ?> </td>
 <td> <?php echo $res['rate'];  ?> </td>
 <td> <?php $a= $res['quantity']*$res['rate'];
echo $a;
 ?> </td>
</tr>
<?php } ?> 

</table> 
 
       
</div>
<!-- Modal footer -->
 <div class="modal-footer">
</div>
</div>
</div>
</div>


                        <!-- FOR MODEL PART OF MY CART--->


<div class="modal fade" id="myModalCart">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
      
                          <!-- Modal Header -->
<div class="modal-header"style="color:white;background-color:#001f3f;">
<h4 class="modal-title"style="text-align: center;">YOUR CART</h4>
<button type="button" class="close" style="background-color:red;" data-dismiss="modal">X</button>
</div>
        
                             <!-- Modal body -->
<div class="modal-body">
<table class="table table-striped" style="padding: 0;">


<tr>
    <th>S.N</th>
    <th>Items Names</th>
    <th>Quantity</th>
    <th>Rate</th>
    <th>Action</th>
</tr>

<tr>
<?php

  include 'conn.php'; 
 $q = "select * from cart ";

  $query = mysqli_query($con,$q);
$i=1;
  while($res = mysqli_fetch_array($query)){
 ?>
 <form method="post" action="cartsave.php">
<input type="hidden" name="id" value=" <?php echo $res['id'];  ?>">
 <tr class="text-center">
 <td> <?php echo $i;  ?> </td>
 <td><?php echo $res['sub2'];  ?>- <?php echo $res['itemname'];  ?>-<?php echo $res['sub1'];  ?></td>
 <td>
    <input type="number" class="form-control form-control-sm" name="qty" size="1" max="9" min="1"/>
 </td>
 <td> <?php echo $res['rate'];  ?> </td>
<td> 
    <button style='font-size:24px' type="submit" name="done"><i class='fas fa-plus-circle'></i></button>
</td>
</tr>
</form>
<?php 
$i=$i+1;
} ?> 

</table>       
</div>
                            <!-- Modal footer -->
<div class="modal-footer">
</div>
</div>
</div>
</div>


                            <!-- The Modal MY BILL -->
<div class="modal fade" id="myModal">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
      
                            <!-- Modal Header -->
 <div class="modal-header">
 <h4 class="modal-title"style="text-align: center;">YOUR BILL</h4>
 <button type="button" class="close" style="background-color:red;" data-dismiss="modal">X</button>
 </div>
        
                             <!-- Modal body -->
<div class="modal-body">
<div class="printBill">
<table class="table table-striped" style="padding: 0;">
  <form method="post" action="cartsave.php">
<tr>
    <th>S.N</th>
    <th>Particulars</th>
    <th>Quantity</th>
    <th>Rate</th>
    <th>Total</th>
</tr>
<tr>
    <td>1</td>
    <td>Veg Burger</td>
    <td>2</td>
    <td>Rs.120</td>
    <td>Rs.240</td>
</tr>
</form>
</table>        
</div>
</div>

                             <!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn" ><i class="fa fa-download"></i>Save</button>
</div>
                              <!-- For the button--->
</div>
</div>
</div>

                             <!--  FOR THE BODY TAB-->
<div class="tab"style="width: 96%; margin-left: 2%;" >
<div class="forLeft">
  <button class="tablinks" style="color:white; font-family:sans-serif;"onclick="openCity(event, 'Food')"id="defaultOpen">FOOD</button>
  <button class="tablinks" style="color:white;font-family:sans-serif;" onclick="openCity(event, 'Drinks')">DRINKS</button>
  <button class="tablinks" style="color: white;font-family:sans-serif;" onclick="openCity(event, 'Deserts')">DESERTS</button>
</div>
<div class="forRight">
<div class="search-container">
<form action="">
     <input type="text" placeholder="Search...." name="search"/>
      <button class="fa fa-search"type="submit" style="height:2.2em;"></button>
</form>
</div>
</div>
</div>

<div id="Food" class="tabcontent"style="width: 96%; margin-left: 2%; background-color:#DDDDDD ;" >
                              <!--  For the clickable food images -->
<div style="text-align:center ">
<h4 style="color:white; background-image: linear-gradient(#3A6791,skyblue);font-size: 35px;margin-left:15%;margin-right:15%;margin-bottom:1%;border-radius: 25px;;">Welcome Name</h4>
  <h2>ORDER YOUR FOOD HERE</h2>
  <p>To choose,click on the images below:</p>
</div>
                            <!-- For the food menu items-->
                            <!-- The four columns -->

<div class="row">
   <?php

  include 'conn.php'; 
 $q = "select * from items where catagory='food' || catagory='Food' ";

  $query = mysqli_query($con,$q);
  while($res = mysqli_fetch_array($query)){
 ?>
<div class="col-sm-3">
<a href="#" data-toggle="modal" data-target="#myModalBurger">
    <img src="Images/burger.jpg" alt="Burger" style="width:100%" /></a>
<div class="text" >
    <h6><?php echo $res['sub1']; ?></h6>
</div>

</div>
<?php } ?>
</div>
</div>
                               <!-- The Modal for the Burger image -->
<div class="modal fade" id="myModalBurger">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
      
                                  <!-- Modal Header -->
<div class="modal-header" style="background-color:#001f3f;">
<h4 class="modal-title" style="color:white;">Choose  :</h4>
<button type="button" class="close" data-dismiss="modal"style="background-color:red; border-radius:2px;">X</button>
</div>
                                  <!-- Modal body -->
<div class="modal-body">
<script src="script.js"></script>
<div class="w3-container">
  <?php
    require_once 'conn.php';
   $u=$_GET['id'];
  include 'conn.php'; 
 $q = "select * from items where itemid = '$u'";

  $query = mysqli_query($con,$q);
  while($res = mysqli_fetch_array($query)){
 ?>
<button onclick="myFood('ChickenBurger')" class="w3-button w3-block w3-gray w3-left-align">
<?php echo $res['sub1']; ?></button>
<?php } ?>

<div id="ChickenBurger" class="w3-hide">

<table style="width: 100%;">

  <?php

  include 'conn.php'; 
 $q = "select * from items where itemid = '$u' ";

  $query = mysqli_query($con,$q);
  while($res = mysqli_fetch_array($query)){
 ?>
<tr>
<td> <a href="order.php?id=<?php echo $res['itemid']; ?>"><?php echo $res['sub1']; ?></a></td>
<td>Rs. <?php echo $res['rate']; ?></td>
</tr>
<?php } ?>

</table>
</div>
</div>
</div>
                                     <!-- Modal footer -->
<div class="modal-footer">
</div>
</div>
</div>
</div>

               
                <!--- TO CHECK --->
<script>

function myFood(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>





<div id="Drinks" class="tabcontent"style="width: 96%; margin-left: 2%;background-color:#DDDDDD ;">
                              <!---  For the Drinks Images -->
<div style="text-align:center">
<h4 style="color:white; background-image: linear-gradient(#3A6791,skyblue);font-size: 35px;margin-left:15%;margin-right:15%;margin-bottom:1%;border-radius: 25px;;">Welcome Name</h4>        
<h2>ORDER YOUR DRINKS HERE</h2>
  <p>To choose,click on the images below:</p>
</div>
<!-- The four columns -->
<div class="row">
<div class="col-sm-3">
    <img src="Images/fanta.jpg" alt="Fanta" style="width:100%"data-toggle="modal" data-target="#myModalDrinks" onclick="myFunction(this);">
<div class="text">
    <h6>Fanta</h6>
</div>
</div>
</div>

<!--End for the drinks images part  -->
 </div>
 
                                               <!-- Modal for the drinks-->
 <div class="modal fade" id="myModalDrinks">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
      
                                  <!-- Modal Header -->
<div class="modal-header" style="background-color:#001f3f;">
<h4 class="modal-title" style="color:white;">Choose your Drinks :</h4>
<button type="button" class="close" data-dismiss="modal"style="background-color:red; border-radius:2px;">X</button>
</div>
                                  <!-- Modal body -->
<div class="modal-body">
<script src="script.js"></script>
<div class="w3-container">
<button onclick="myFood('ColdDrinks')" class="w3-button w3-block w3-gray w3-left-align">
Cold Drinks</button>

<div id="ColdDrinks" class="w3-hide">
<table style="width: 100%;">
<tr>
<td> <a href="#">Fanta</a></td>
<td>Rs.200</td>
</tr>

 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.160</td>
 </tr>
 
 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.180</td>
 </tr>

<tr>
<td><a href="#">Type</a></td>
<td>Rs.230</td>
</tr>
</table>
</div>

<button onclick="myFood('HardDrinks')" class="w3-button w3-block w3-gray w3-left-align">
Hard Drinks</button>
<div id="HardDrinks" class="w3-hide">

<table style="width: 100%;">
<tr>
<td><a href="#">Carlsberg </a></td>
<td>Rs.200</td>
 </tr>
 
 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.160</td>
 </tr>
 
 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.180</td>
 </tr>

<tr>
<td><a href="#">Type</a></td>
<td>Rs.230</td>
</tr>
</table>
</div>



</div>
</div>
                                     <!-- Modal footer -->
<div class="modal-footer">
</div>
</div>
</div>
</div>
 
 
     <!-- Row-Coloum images for Deserts-->

<div id="Deserts" class="tabcontent" style="width: 96%; margin-left: 2%;background-color:#DDDDDD ;">
<!--Start of the images for the Deserts --->
<div style="text-align:center">
<h4 style="color:white; background-image: linear-gradient(#3A6791,skyblue);font-size: 35px;margin-left:15%;margin-right:15%;margin-bottom:1%;border-radius: 25px;;">Welcome Name</h4>
<h2>ORDER YOUR DESERTS HERE</h2>
<p>To choose,click on the images below:</p>
</div>

<!-- For row & four column images -->
<div class="row">
  <div class="col-sm-3">
    <img src="Images/d1.jpg" alt="ice-cream" style="width:100%"data-toggle="modal" data-target="#myModalDeserts">
      <div class="text">
    <h6>Ice-Cream</h6>
    </div>
  </div>
  </div>
<!-- End of the images for the DESERTS-->
</div>



                       <!---- Modal for the Deserts-->
<div class="modal fade" id="myModalDeserts">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
      
                                  <!-- Modal Header -->
<div class="modal-header" style="background-color:#001f3f;">
<h4 class="modal-title" style="color:white;">Choose your Deserts :</h4>
<button type="button" class="close" data-dismiss="modal"style="background-color:red; border-radius:2px;">X</button>
</div>
                                  <!-- Modal body -->
<div class="modal-body">
<script src="script.js"></script>
<div class="w3-container">
<button onclick="myFood('IceCream')" class="w3-button w3-block w3-gray w3-left-align">
IceCream</button>

<div id="IceCream" class="w3-hide">
<table style="width: 100%;">
<tr>
<td> <a href="#">Chocolate-Icecream</a></td>
<td>Rs.200</td>
</tr>

 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.160</td>
 </tr>
 
 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.180</td>
 </tr>

<tr>
<td><a href="#">Type</a></td>
<td>Rs.230</td>
</tr>
</table>
</div>

<button onclick="myFood('Cake')" class="w3-button w3-block w3-gray w3-left-align">
Cake</button>
<div id="Cake" class="w3-hide">

<table style="width: 100%;">
<tr>
<td><a href="#">Choco-cake </a></td>
<td>Rs.200</td>
 </tr>
 
 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.160</td>
 </tr>
 
 <tr>
 <td><a href="#">Type</a></td>
 <td>Rs.180</td>
 </tr>

<tr>
<td><a href="#">Type</a></td>
<td>Rs.230</td>
</tr>
</table>
</div>



</div>
</div>
                                     <!-- Modal footer -->
<div class="modal-footer">
</div>
</div>
</div>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
</body>
</html>
