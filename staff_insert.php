
<html>
<head><center><h1>Add Staff information</h1></center>

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
<center><a style="color:green;" href="homepage.php">Home<a></center>
	<form action="" method = "POST">
  <div class="container">
  
    <hr>

   <center> <label for="Sno"><b>Serial Number</b></label>
    <input type="text" placeholder="Enter Serial number" name="Sno" maxlength="4" required></center>


<center><label for="FName"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FName" maxlength="8" required></center>



<center><label for="LName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="LName" maxlength="8" required></center>

<center><label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Address" maxlength="44" required></center>

<center><label for="Tel_No"><b>Tel_No</b></label>
    <input type="text" placeholder="Enter Tel_No" name="Tel_No" maxlength="15" required></center>

<center><label for="Position"><b>Position</b></label>
    <input type="text" placeholder="Enter Position" name="Position"  maxlength="12" required></center>

<center><label for="Sex"><b>Sex (M OR F)</b></label>
    <input type="text" placeholder="Enter Sex" name="Sex" maxlength="1" required></center>


<center><label for="DOB"><b>Date of birth (YYYY-MM-DD)</b></label>
    <input type="text" placeholder="Enter DOB in YYYY-MM-DD" name="DOB" required></center>
    <center><label for="Salary"><b>Salary</b></label>
    <input type="text" placeholder="Enter Salary" name="Salary" required></center>
    <center><label for="NIN"><b>NIN</b></label>
    <input type="text" placeholder="Enter NIN" name="NIN" maxlength="10" required></center>
    <center><label for="Bno"><b>Branch number</b></label>
    <input type="text" placeholder="Enter Bno" name="Bno" maxlength="10" required></center>
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
<?php
print("<br>");
print("<hr>");
require_once"database_connect.php";
		$conn_id=conection();
$result1 = mysqli_query($conn_id,"SELECT * FROM staff");

print("<style>td{border-left:1px solid black;border-top:1px solid black;}table{border-right:1px solid black;border-bottom:1px solid black;}</style>");

print("<table align='center'>");
print("<tr><td>Sno</td><td>FName</td><td>LName</td><td>Address</td><td>Tel_No</td><td>Position</td><td>Sex</td><td>DOB</td><td>Salary</td><td>NIN</td><td>Bno</td></tr>");

while($row=mysqli_fetch_assoc($result1))
{
	print("<tr>");
	printf("<td> %s </td>",htmlspecialchars($row['Sno']));
	printf("<td> %s </td>",$row['FName']);
	printf("<td> %s </td>",$row['LName']);
	printf("<td> %s </td>",$row['Address']);
	printf("<td> %s </td>",$row['Tel_No']);
	printf("<td> %s </td>",$row['Position']);
	printf("<td> %s </td>",$row['Sex']);
	printf("<td> %s </td>",$row['DOB']);
	printf("<td> %s </td>",$row['Salary']);
	printf("<td> %s </td>",$row['NIN']);
	printf("<td> %s </td>",$row['Bno']);
	printf("</tr>");
}
print("</table>");


?>


</body>
</html>
			
			
		