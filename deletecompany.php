<?php

$Business_Name = $_GET['business_name'];

       $con= mysqli_connect("localhost", "root", "", "market_db");
             if (!$con) {
                 die("Connection failed: " . mysqli_connect_error());
              }

              else{
                $sql = "DELETE FROM `companyreg_tbl` WHERE Business_Name = '$Business_Name'";

                //execute sql
                 $result = $con->query($sql);

                 if($result == true){
                 	header("Location:allcompanies.php");
                 }
                 else{
                 	echo "Failed to Delete";
                    echo "<a href='allcompanies.php'>Go Back to all Companies </a>";
                 }

             }

?>