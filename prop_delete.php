
<html>
<head>
<br>
<br>
<center><h1>Enter Property Pno to Delete Property Details</h1></center>
<center><a style="color:green;" href="homepage1.php">Home<a></center>
<br>
<br>
</head>

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
<body background="https://images.homedepot-static.com/productImages/65919f19-2a89-4390-a6c2-d83b30a39e0c/svn/tempaper-wallpaper-br096-64_1000.jpg" >
<div>
	<form name= "Staffinfo" method="get" action="deletep.php">
	<center>Property Number(Pno):<input type="text" name="Pno"><br></center>
	<center><input style="background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" name="submit" value="Delete"></center>
	</form>
	</div>

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
			
			
		