<?php

$ProductID = $_GET['productid'];

       $con= mysqli_connect("localhost", "root", "", "market_db");
             if (!$con) {
                 die("Connection failed: " . mysqli_connect_error());
              }

              else{
                $sql = "DELETE FROM `feedsale_tbl` WHERE ProductID = '$ProductID'";

                //execute sql
                 $result = $con->query($sql);

                 if($result == true){
                 	header("Location:allproducts.php");
                 }
                 else{
                 	echo "Failed to Delete";
                    echo "<a href='allproducts.php'>Go Back to all products </a>";
                 }

             }

?>