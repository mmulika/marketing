<!DOCTYPE html>
<html>
<head>
	<title>Purchase Products</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg  bg-dark navbar-dark scrolling-navbar topnav">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.html" target="_blank">
        <a i class="fas fa-home"></i>
        <strong>Online Cattle Feeds Marketing</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          
          </li>
          <li class="nav-item">
            <a class="nav-link" href="companyreg.php">Register Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="businesslogin.php" target="_blank">Sell cattle feeds Feeds</a>
          </li>
          <li class="nav-item">
          <li class="nav-main">
      
        
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://en-gb.facebook.com/login/" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/?lang=en" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="adminlog.php" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fa fa-user mr-2"></i>Admin
            </a>
          </li>
        </ul>

      </div>

    </div>
   </nav>
   <section class="container-fluid" id="product">
   	<h3>Purchase of Products</h3>
   <?php
$con= mysqli_connect("localhost", "root", "", "market_db");
             if (!$con) {
                  die("Connection failed: " . mysqli_connect_error());
              }

             $sql="SELECT * FROM `feedsale_tbl`"; 
             $result = $con->query($sql);
              echo "<div class='row'>";
             while ($row = $result->fetch_assoc()) {
   
    echo "<div class='col-md-3'>";

         
            echo "<h4>ProductName</h4><br/>";
           echo "<p class='card-text'>".$row['productName']."</p>";
            echo "<h4>Description</h4><br/>";
           echo "<p class='card-text'>".$row['Description']."</p>";
           echo "<img src='".$row['productImage']."' width='30%'>";
    
           // echo "<a href='' class='btn btn-secondary'>Purchase</a>";

           $company = $row['company'];


           

           $sql1="SELECT * FROM companyreg_tbl WHERE Business_Number = '$company'"; 
           $result1 = $con->query($sql1);
        
           while ($row1 = $result1->fetch_assoc()) {
            $site = $row1['website_link'];
            echo "<a class='btn btn-outline-secondary' href='$site'>Purchase</a> ";
           echo "<br><hr>";
           
          
    echo "</div>";
    
}
echo "</div>";
}
    


?>
</section>
<hr>
  <footer class="container-fluid" id="footer">
    <div class="row text-center">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
        <button href="companyreg.php" class="btnfooter">Register Company</button>
        <button href="#" class="btnfooter">Purchase Products<i class="fas fa-shopping-cart"></i></button>

        
      </div>
      <div class="col-md-3">
        
      </div>
      
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
        <a href="https://en-gb.facebook.com/login/" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>

      <a href="https://twitter.com/?lang=en" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=d_FIzhpHORQ" target="_blank">
       <i class="fab fa-youtube"></i>
      </a>

      <a href="https://plus.google.com/+GoogleBusiness" target="_blank">
        <i class="fab fa-google-plus-square"></i>
      </a>

      <a href="https://www.pinterest.com/search/pins/?q=agribusiness&rs=typed&term_meta[]=agribusiness%7Ctyped" target="_blank">
        <i class="fab fa-pinterest"></i>


      </a>

      <a href="about.html">About us</a>

        
      </div>
      <div class="col-md-4">
        
      </div>
      
    </div>
    <div class="row text-center">
    	<div class="col-md-12 footer-copyright">
         © 2018 Copyright:
      <a href="#" target="_blank">agri-business.com</a>
    
    		
    	</div>
    	
    </div>
    

  </footer>






<script src="js/jquery-easing.min.js"></script>
  <script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/calc.js"></script>

</body>
</html>
}
