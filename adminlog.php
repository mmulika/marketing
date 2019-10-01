
<?php
if(isset($_POST['Done'])){
 $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  //$newpass=md5($Password);
  

  $con = mysqli_connect("localhost", "root", "", "market_db");
  if (!$con) {
    die("connection failed:".mysqli_connect());
  }
else{
  $sql = "SELECT `Username`,  `Password` FROM `admin_tbl`  WHERE Username ='$Username' AND  Password = '$Password'";

  //Check if there is a match
  $result = $con->query($sql);

  if($result->num_rows==0){
    //outputdata of each row
    echo "No Match";
  }
  elseif ($result->num_rows >= 1) {
    
    // session_start();
    //$SESSION['user'] = $Username;

    header("location:allproducts.php");
    echo "ok";

    
  }
  elseif ($result->num_rows >1) {
    echo "Not An admin";
  }

  else {
    echo "error";
  }
}
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Cattle Feeds </title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">

</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg  bg-dark navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.html" target="_blank">
      	<a<i class="fas fa-home"></i>
        <strong>Online Cattle Feeds  Marketing</strong>
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
            <a class="nav-link" href="businesslogin.php" self>Sell Animal Feeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="purchase.php" self>Buy Animal Feeds</a>
          </li>
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
   <section class="container-fluid" id="form">
   	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
	<form method="POST" class="form-group">
		<h3><u>Admin Login Form</u></h3>
		<label>Username</label>
		<input type="Text" class="form-control" name="Username" required="" placeholder="Write your Username">
		<br/>
		<br/>
		<label>Password</label>
		<input type="Password" class="form-control" name="Password" required="" placeholder="Enter Password">
		<br/>
		<br/>
		<input type="checkbox" name="checkbox">Remember Me
		<input type="submit" class="btn btn-ouline-secondary btn-block"  name="Done"><br>
		<a href="index.html" class="btn btn-outline-secondary btn-block">Back</a>
		
	</form>
</div>
<div class="col-md-4"></div>
</div>

   </section>


	 <hr>
  <footer class="container-fluid" id="footer">
    <div class="row text-center">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
        <button href="companyreg.php" class="btnfooter">Register Company</button>
        <button href="purchase.php" class="btnfooter">Purchase Products<i class="fas fa-shopping-cart"></i></button>

        
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
         © 2019 Copyright:
      <a href="#" target="_blank">cattle feeds.com</a>
    
    		
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
