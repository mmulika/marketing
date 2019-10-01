''
<!DOCTYPE html>
<html>
<head>
  <title>Admin DashBoard</title>
  <script src="js/bootstrap.js"></script>
  <script type="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
  <style>


.sidenav {
  margin-top: 4%;
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    opacity: 0.5;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body id="dashadmin" style="background-image: url('images/cow.jpg'); background-repeat: no-repeat;background-size: cover;">
  <header>
  <nav class="navbar fixed-top navbar-expand-lg  bg-dark navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.html" target="_blank">
        <a<i class="fas fa-home"></i>
        <strong>Online Cattle feeds Marketing</strong>
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
            <a class="nav-link" href="companyreg.php" data-toggle="modal">Register Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="businesslogin.php" target="self">Sell Animal Feeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="purchase.php" target="self">Buy Animal Feeds</a>
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
            <a href="index.html" class="nav-link border border-light rounded"
             >
              <i class="fa fa-user mr-2"></i>Logout
            </a>
          </li>
        </ul>

      </div>

    </div>
   </nav>
   </header>
<br>
<br>
   <section>
  
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h5>Admin DashBoard</h5>
  <a href="allproducts.php">Home Admin Page</a>
  <a href="allcompanies.php">Registered Companies</a>
  <a href="allproducts.php">Registered Products</a>
   <a href="reports.php">Reports</a>
</div>
<br>

<h1 class="text-center Admin">REGISTERD PRODUCTS</h1>

  
</section>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<section>
  <?php
$con = mysqli_connect("localhost", "root", "", "market_db");
if (!$con) {
    die("connection failed". mysqli_connect_error());
}

else{
$sql ="SELECT * FROM `feedsale_tbl`";

$result = $con->query($sql);

if ($result->num_rows >0) {
  echo "<div class = 'row table-responsive-sm'>
                  <center style='width:100%;'>";    
                  echo "<table border = '1' style='width:80%; overflow:hidden; margin:auto;' class='table table-dark table-hover'>
                  <thead>";
                  echo "<th>ProductID</th>";
                  echo "<th>ProductName</th>";
                
                  echo "<th>ProductImage</th>";
                  echo "<th>Description</th>";
                  echo "<th>Edit</th>
                  </thead>";
                    while ($row = $result->fetch_assoc()) {
                       echo "<tr>";
                         echo "<td>".$row['ProductID']."</td>";
                        echo "<td>".$row['productName']."</td>";
                      
                        echo "<td><img src='".$row['productImage']."' width='30%'></td>";
                        echo "<td>".$row['Description']."</td>";
                        
                        
                       // echo "<td><a href='".$row['website_link']."'></a></td>";
                        $ProductID = $row['ProductID'];
                        // $Business_Number = $row['Business_Number'];
                        // $Business_Email = $row['Business_Email'];
                        // $Business_PhoneNo= $row['Business_PhoneNo'];
                        echo "<td> <a class='btn btn-dark' href='deleteproducts.php?productid=$ProductID'>Delete</a> </td>";
                          // echo "<td> <a class='btn btn-success' href='updateMember.php?id=$ID&user=$Username&gender=$Gender&residence=$Residence'>Edit</a> </td>";

                          echo "</tr>";
                    }
                  echo "</table>";
                  echo "</center>
                  </div>";
                   
}

else{
  echo "No Products Registered";
}

}


?>
</section>
   <footer class="container-fluid" id="footer" style="margin-top: 21%;">
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

      <a href="#">About us</a>

        
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