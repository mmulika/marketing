<!DOCTYPE html>
<html>
<head>
  <title>Update Company</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
        <style>
          #form{
            padding-top: 1%;
          }
        </style>
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
            <a href="adminlog.php" class="nav-link border border-light rounded" self
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
  <h3 class="text-center">Search For Company
  
  <label>Business Name</label>
  <input type="text" name="Business_Name" class="form-control" required="" placeholder="Enter business name">
  <br/>
  <br/>
  <label>Business Number</label>
  <input type="text" name="Business_Number" class="form-control" required="" placeholder="Enter business number">
  <br/>
  <br/>
  
  <input type="submit" name="Done" class="btn btn-ouline-secondary btn-block" self>
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

// check if id is empty
            if (!$Business_Number) {
              echo "Please Enter Business_Number to Search";

            }
            if (!$Business_Name) {
              echo "Please Enter a Business_Name to Search";

            }
            
         

            

            $con= mysqli_connect("localhost", "root", "", "market_db");
             if (!$con) {
                 die("Connection failed: " . mysqli_connect_error());
              }

              else{
                $sql = "SELECT `Business_Name`, `Business_Number`, `Business_Email`, `Business_PhoneNo`, `website_link` FROM `companyreg_tbl` WHERE Business_Number ='$Business_Number' AND  Business_Name = '$Business_Name'";


                //execute sql
                 $result = $con->query($sql);

                 if ($result->num_rows > 0) {
                  echo "<div class = 'row table-responsive-sm'>
                  <center style='width:100%;'>";    
                  echo "<table border = '1' style='width:80%; overflow:hidden; margin:auto;' class='table table-dark table-hover'>
                  <thead>";
                  echo "<th>Business_Name</th>";
                  echo "<th>Business_Number</th>";
                  echo "<th>Business_Email</th>";
                  echo "<th>Business_PhoneNumber</th>";
                  echo "<th>Website Link</th>
                  </thead>";
                    while ($row = $result->fetch_assoc()) {
                       echo "<tr>";
                         echo "<td>".$row['Business_Name']."</td>";
                        echo "<td>".$row['Business_Number']."</td>";
                        echo "<td>".$row['Business_Email']."</td>";
                        echo "<td>".$row['Business_PhoneNo']."</td>";
                        echo "<td>".$row['website_link']."</td>";
                        
                       // echo "<td><a href='".$row['website_link']."'></a></td>";
                       $Business_Name = $row['Business_Name'];
                       $Business_Number = $row['Business_Number'];
                       $Business_Email = $row['Business_Email'];
                       $Business_PhoneNo= $row['Business_PhoneNo'];
                       $website_link=$row['website_link'];
                        echo "<td> <a class='btn btn-dark' href='deletecompany.php?business_name=$Business_Name'>Delete</a> </td>";
                         echo "<td> <a class='btn btn-light' href='updateCompany.php?business_name=$Business_Name&business_number=$Business_Number&business_email=$Business_Email&business_phoneno=$Business_PhoneNo&website=$website_link'>Edit</a> </td>";
                          // echo "<td> <a class='btn btn-success' href='updateMember.php?id=$ID&user=$Username&gender=$Gender&residence=$Residence'>Edit</a> </td>";

                          echo "</tr>";
                    }
                  echo "</table>";
                  echo "</center>
                  </div>";
                   
}

                 else{
                  echo "$Business_Number  doesn't exist";
                 }


                 
              }//end con check



} // end of isset

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

