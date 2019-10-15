
<html>
<head><center><h1>Add Property information</h1></center>

</head>
<style> 
input[type=text] {
  width: 20%;
  padding: 10px 16px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
}
</style>

<body background="https://images.homedepot-static.com/productImages/65919f19-2a89-4390-a6c2-d83b30a39e0c/svn/tempaper-wallpaper-br096-64_1000.jpg" ><div>
<center><a style="color:green;" href="homepage1.php">Home<a></center>
	<form action="" method = "POST">
  <div class="container">
  
    <hr>

   <center> <label for="Pno"><b>Property Number</b></label>
    <input type="text" name="Pno" ></center>


<center><label for="Street"><b>Street Name</b></label>
    <input type="text"  name="Street" ></center>
<center><label for="Area"><b>Area Name</b></label>
    <input type="text"  name="Area" ></center>

<center><label for="City"><b>City Name</b></label>
    <input type="text" name="City" ></center>

<center><label for="Pcode"><b>Property Pcode</b></label>
    <input type="text"  name="Pcode" ></center>

<center><label for="Type"><b>Property type</b></label>
    <input type="text"  name="Type"  ></center>

<center><label for="Rooms"><b>Rooms</b></label>
    <input type="text" name="Rooms" ></center>


<center><label for="Rent"><b>Rent</b></label>
    <input type="text"  name="Rent" ></center>
    <center><label for="Ono"><b>Property Ono</b></label>
    <input type="text"  name="Ono" ></center>
    <center><label for="Sno"><b>Property Sno</b></label>
    <input type="text"  name="Sno" ></center>
    <center><label for="Bno"><b>Property Bno</b></label>
    <input type="text"  name="Bno" ></center>
   <center> <button style="background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" class="registerbtn" name ='register'>INSERT</button></center>
  </div>


</form>

 <?php

         if (isset($_POST['register'])) {
             include('database_connect.php');
             $conn_id = conection();
             $sql = "INSERT INTO property_for_rent VALUES ('".$_POST["Pno"]."','".$_POST["Street"]."','".$_POST["Area"]."','".$_POST["City"]."','".$_POST["Pcode"]."','".$_POST["Type"]."','".$_POST["Rooms"]."','".$_POST["Rent"]."','".$_POST["Ono"]."','".$_POST["Sno"]."','".$_POST["Bno"]."')";

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
<?php
print("<br>");
print("<hr>");
require_once"database_connect.php";
		$conn_id=conection();
$result1 = mysqli_query($conn_id,"SELECT * FROM property_for_rent");

print("<style>td{border-left:1px solid black;border-top:1px solid black;}table{border-right:1px solid black;border-bottom:1px solid black;}</style>");

print("<table align='center'>");
print("<tr><td>Pno</td><td>Street</td><td>Area</td><td>City</td><td>Pcode</td><td>Type</td><td>Rooms</td><td>Rent</td><td>Ono</td><td>Sno</td><td>Bno</td></tr>");

while($row=mysqli_fetch_assoc($result1))
{
	print("<tr>");
	printf("<td> %s </td>",htmlspecialchars($row['Pno']));
	printf("<td> %s </td>",$row['Street']);
	printf("<td> %s </td>",$row['Area']);
	printf("<td> %s </td>",$row['City']);
	printf("<td> %s </td>",$row['Pcode']);
	printf("<td> %s </td>",$row['Type']);
	printf("<td> %s </td>",$row['Rooms']);
	printf("<td> %s </td>",$row['Rent']);
	printf("<td> %s </td>",$row['Ono']);
	printf("<td> %s </td>",$row['Sno']);
	printf("<td> %s </td>",$row['Bno']);
	printf("</tr>");
}
print("</table>");


?>


</body>
</html>
			
			
		