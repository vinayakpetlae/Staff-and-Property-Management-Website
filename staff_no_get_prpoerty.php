
<html>
<head><center><h1>Search Property Details of Staff</h1></center>
<center><a style="color:green;" href="main.php">Home<a></center>
</head>
<body background="https://images.all-free-download.com/images/graphicthumb/orange_textile_background_8_211099.jpg" >
<style> 
input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
}
</style>
<br>
<br>
<div>
	<form name= "Staffidentify" method="get" action="staff_property.php">
	<center>Staff Name(Example:Mary)<input type="text" name="staffname"><br></center>
	<center><input style="background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;"type="submit" name="submit" value="Search"></center>
	</form>
	</div>

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
