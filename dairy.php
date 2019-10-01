<!DOCTYPE html>
<html>
<head>
    <title>Diary Meal</title>
    <title>Purchase Products</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="globe.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
</head>
<body class="container-fluid">
<h1 class="text-center">Diary Meal</h1>

<?php
$conn= mysqli_connect("localhost", "root", "", "market_db");
             if (!$conn) {
                 die("Connection failed: " . mysqli_connect_error());
              }

              else{
                $sql = "SELECT `ProductID`, `productName`, `Type`, `productImage`, `Description`, `Contact_Info` FROM `feedsale_tbl` WHERE `Type` = 'Dairy Feeds'";

                    $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='row'>";
                //output data of row
               
              
             while ($row = $result->fetch_assoc()) {
   
    echo "<div class='col-md-3'>";

          echo "<h4>ProductID</h4>";
            echo "<p class='title'>".$row['ProductID']."</p>";
           echo "<h4>ProductName</h4>";
            echo "<p class='card-text'>".$row['productName']."</p>";
           echo "<h4>Description</h4>";
            echo "<p class='card-text'>".$row['Description']."</p>";
           echo "<img src='".$row['productImage']."' width='30%'>";
           echo "</br>";
           echo "<h4>Contact_Info</h4>";
            echo "<p class='card-text'>".$row['Contact_Info']."</p>";
           // echo "<a href='' class='btn btn-secondary'>Purchase</a>";

           $ProductID = $row['ProductID'];
echo "<a class='btn btn-outline-secondary' href='try.php?productid=$ProductID'>Purchase</a> ";
           echo "<br><hr>";

           // echo "<p>".$row['Description']."</p>";
    echo "</div>";
    
}
echo "</div>";
} // end of if
      else {
         echo "No Diary Meal Currently on Sale";
      }

                 	 

                 
              }//end con check


?>
</body>
</html>


