<!DOCTYPE html>
<html>
<head>
	<title>Sale</title>
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
        <strong>Online Agri-Business Marketing</strong>
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
            <a class="nav-link" href="businesslogin.php" target="_blank">Sell Animal Feeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="purchase.php" target="_blank">Buy Animal Feeds</a>
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
            <a href="dashadmin.php" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fa fa-user mr-2"></i>Admin
            </a>
          </li>
        </ul>

      </div>

    </div>
   </nav>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
<form method="POST" class="form-group" enctype="multipart/form-data">
	<h3 class="text-center">ANIMAL FEEDS SALE</h3>
	
	<label>Product Id</label>
	<input type="text" name="ProductID" class="form-control" placeholder="Enter ProductID">
	<br/>
	<br/>
	<label>Product Name</label>
	<input type="text" name="ProductName" class="form-control" placeholder="Enter Product Name">
	<br/>
	<br/>
	<label>Product Type</label><br>
	<select name="Type">
  <option >Dairy Feeds</option>
  <option >beef Feeds</option>
  <option >calves Feeds</option>
  <option >Goat Feeds</option>
  <option >Pig Feeds</option>
</select>
	<br/>
	<br/>
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
	<br>
	<label>Choose File to Upload</label>
	<input type="file" name="uploadedfile" class="form-control">
	<br>

  <label>Company</label>
	<input type="text" name="company" class="form-control" placeholder="Enter CompanyID">
	<br/>
	<br/>

	<label>Description</label>
	<textarea name="Description" class="form-control" rows="5" cols="5"  required placeholder="Please Enter a brief Description">
		
	</textarea>
	<br/>
	<br/>
	<input type="submit" name="Done" class="btn btn-secondary btn-block">
	<a href="index.html" class="btn btn-outline-secondary btn-block">Back</a>

</form>
</div>
<div class="col-md-3"></div>
</div>
</div>

<?php

if (isset($_POST['Done'])) 
{
	
	$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded<br/>";
    }
 else{
    echo "There was an error uploading the file, please try again!";
}

  $URL = "http://localhost:80/MARKETING/uploads/".basename( $_FILES['uploadedfile']['name']);
 print($URL);


// $Business_Number = $_POST['Business_Number'];
	$ProductID = $_POST['ProductID'];
	$ProductName = $_POST['ProductName'];
	$Description = $_POST['Description'];
  $Type = $_POST['Type'];
  $company = $_POST['company'];

	$con = mysqli_connect("localhost", "root","","market_db");
	if (!$con) {
		die("connection failed:".mysqli_connect_error());
	}

	else{

			$sql ="INSERT INTO `feedsale_tbl`( `ProductID`, `productName`,`Tpye`, `productImage`, `Description`, `company`) VALUES  ( '$ProductID', '$ProductName', '$Type', '$URL', '$Description', '$company')";
			if ($con->query($sql)===TRUE) {
				echo "Registered";
}
else{
				echo "Error";
			}
		
		
	}

// upload image 


}// END OF CONNECTION

?>
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
         © 2019 Copyright:
      <a href="#" target="_blank">online cattle feeds.com</a>
    
    		
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

