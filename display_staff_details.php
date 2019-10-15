
<html>
<head>
<br>
<br>
<center><h1>Salary Details</h1></center>
<center><a style="color:green;" href="homepage.php">Home<a></center>
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
	<form name= "DisplayStaff" method="get" action="display_staff_details_results.php">
	<center>Salary Greater than(>): <input type="text" name="sgreater"><br></center>
	<center>Salary Less than(<) &nbsp;&nbsp;: <input type="text" name="slesser"><br></center>

	<center><input style="background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" name="submit" value="Display"></center>
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


</body>
</html>
			
			
		