<?php

         if (isset($_POST['register'])) {
             include('database_connect.php');
             $conn_id = conection();
             $sql = "INSERT INTO staff VALUES ('".$_POST["Sno"]."','".$_POST["FName"]."','".$_POST["LName"]."','".$_POST["Address"]."','".$_POST["Tel_No"]."','".$_POST["Position"]."','".$_POST["Sex"]."','".$_POST["DOB"]."','".$_POST["Salary"]."','".$_POST["NIN"]."','".$_POST["Bno"]."')";

             if ($conn_id->connect_error) {
                 die("Connection failed: " . $conn_id->connect_error);
             }


             if (mysqli_query($conn_id, $sql)) {
                 echo "<script type='text/javascript'>alert('Entry Inserted successfully');</script>";
             } else {
                 echo "Error: " . $sql . "" . mysqli_error($conn_id);
             }
             $conn_id->close();

         }

      ?>