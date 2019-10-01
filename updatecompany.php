<!DOCTYPE html>
<html>
<head>
  <title></title>
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
            <a class="nav-link" href="companylog.php">Update Company</a>
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
            <a href="adminlog.php" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fa fa-user mr-2"></i>Admin
            </a>
          </li>
        </ul>

      </div>

    </div>
   </nav>
  
  
  <section class="container-fluid " id="form">
    <div class="row">
      <div class="col-md-3">
      
      </div>
      <div class="col-md-6">
  
<form method="POST" class="form-group">
  <h3 class="text-center">Register Your Company/Business</h3>
  
  <label>Business Name</label>
  <input type="text" name="Business_Name" class="form-control" required="" placeholder="Enter business name" value="<?php echo $_GET['business_name'];?>">
  <br/>
  <br/>
  <label>Business Number</label>
  <input type="text" name="Business_Number" class="form-control" required="" placeholder="Enter business number"value="<?php echo $_GET['business_number'];?>">
  <br/>
  <br/>
  <label>Business Email</label>
  <input type="text" name="Business_Email" class="form-control" required="" placeholder="Enter business Email"
  value="<?php echo $_GET['business_email'];?>">
  <br/>
  <br/>
  <label>Business Phone Number</label>
  <input type="text" name="Business_PhoneNo" class="form-control" required="" placeholder="Enter business Phone Number" value="<?php echo $_GET['business_phoneno'];?>">
  <br/>
  <br/>
  <label>Website Link Or Social Media Link</label>
  <input type="text" name="website_link" class="form-control" required="" placeholder="Enter Any Website link or social Media Link"value="<?php echo $_GET['website'];?>">
  <br/>
  <br/>
  <input type="submit" name="Done" class="btn btn-ouline-secondary btn-block">
  <a href="index.html" class="btn btn-outline-secondary btn-block">Back</a>

</form>
</div>
<div class="col-md-3"></div>
</div>
</section>
<?php
//1 NF - Every record must unique
////2 NF - Records are split into multiple tables
    if (isset($_POST['Done'])) {
    
 $Business_Name = $_POST['Business_Name'];
  $Business_Number = $_POST['Business_Number'];
  $Business_Email = $_POST['Business_Email'];
  $Business_PhoneNo = $_POST['Business_PhoneNo'];
  $website_link = $_POST['website_link'];

           if (!$Business_Name) {
              echo "Business_Name is Empty";
           }
           elseif (!$Business_Number) {
             echo "Business_Number is Empty";
           }

           elseif (!$Business_Email) {

             echo "Business_Email is Empty";
           }
           

  else{


            $con= mysqli_connect("localhost", "root", "", "market_db");
             if (!$con) {
                 die("Connection failed: " . mysqli_connect_error());
              }

              else{
                $sql = "UPDATE `companyreg_tbl` SET `Business_Name`='$Business_Name',`Business_Number`='$Business_Number',`Business_Email`='$Business_Email',`Business_PhoneNo`='$Business_PhoneNo',`website_link`='$website_link' WHERE Business_Number = '$Business_Number'";


                //execute sql
                 if ($con->query($sql) === TRUE) {
                 echo "New record Updated successfully";
        } else {
            echo "Error: ";
        }
                 
              }//end con check

}// end empty check

          //}//end password check

}//end isset function
?>
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