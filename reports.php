
<h3>Companies Report</h3>

 <?php
$con = mysqli_connect("localhost", "root", "", "market_db");
if (!$con) {
    die("connection failed". mysqli_connect_error());
}

else{
$sql ="SELECT  `Business_Name`, `Business_Number`, `Business_Email` FROM `companyreg_tbl`";

$result = $con->query($sql);

if ($result->num_rows >0) {
  

  echo "<div class = 'row table-responsive-sm'>
                  <center style='width:100%;'>";    
                  echo "<table border = '1' style='width:80%; overflow:hidden; margin:auto;' class='table table-hover'>
                  <thead thead-light>";
                  
                   echo "<th>Business_Name</th>";
                  echo "<th>Business_Number</th>";
                  echo "<th>Business_Email</th>";
                  echo "</thead>";
                    while ($row = $result->fetch_assoc()) {
                       echo "<tr>";
                       
                         echo "<td>".$row['Business_Name']."</td>";
                        echo "<td>".$row['Business_Number']."</td>";
                        echo "<td>".$row['Business_Email']."</td>";
                        
                        

                          echo "</tr>";
                    }
                  echo "</table>";
                  echo "</center>
                  </div>";
                   
}

else{
  echo "No Company Registered";
}

}


?>




<!DOCTYPE html>

<html>
<head>
	<title>Report</title>
	<title>Company Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
	<style >
		
table, td, th {
    border: 1px solid black;
}
th{
	background-color: #1B5E20;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    height: 50px;
    vertical-align: bottom;
    color: #1B5E20;
}
hr{
	border: 1px #1B5E20 solid;
	</style>
}
</head>
<body id="reports">
	<h1 class="text-center">Agri-Business Reports</h1>
	<h3>Products Report</h3>

  <?php
$con = mysqli_connect("localhost", "root", "", "market_db");
if (!$con) {
    die("connection failed". mysqli_connect_error());
}

else{
$sql ="SELECT   `ProductID`, `productName`,  `Description` ,'Type','Company' FROM `feedsale_tbl`";

$result = $con->query($sql);

if ($result->num_rows>0) {
  echo "<div class = 'row table-responsive-sm'>
                  <center style='width:100%;'>";    
                  echo "<table border = '1' style='width:80%; overflow:hidden; margin:auto;' class='table table-hover'>
                  <thead class=''>";
                  
                  echo "<th>ProductID</th>";
                  echo "<th>ProductName</th>";
                  echo "<th>Description</th>";
                  echo  "<th>Type</th>";
                  echo   "<th>Company</th>";
                  echo "</thead>";
                    while ($row = $result->fetch_assoc()) {
                       echo "<tr>";
                        
                        echo "<td>".$row['ProductID']."</td>";
                        echo "<td>".$row['productName']."</td>";
                       
                        echo "<td>".$row['Description']."</td>";
                        echo "<td>".$row['Type']."</td>";
                        echo "<td>".$row['Company']."</td>";
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
<br>
<hr>

</body>
</html>