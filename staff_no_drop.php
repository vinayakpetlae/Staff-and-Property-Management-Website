
<html>
<head><center><h1>Search Staff Names Based On Branch</h1></center>
<center><a style="color:green;" href="homepage.php">Home<a></center>
<br>
<br>
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
<?php
	require_once"database_connect.php";
	$conn_id=conection();
	$db_name="msccs2019_vnrp1";
	$query="select Bno from branch order by Bno";
	mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");
	$result_list=mysqli_query($conn_id,$query)
			or exit("Could not execute the query");


?>

<div>
	<form name= "Branchlist" method="get" action="staff_d.php">
	<center>Branch identifier:
	<select name="branchnum">
	<?php
	while($row1=mysqli_fetch_array($result_list)):;?>
	<option><?php echo $row1[0];?></option>
	<?php endwhile;?>


	</select></center>
	<br>
	<center><input style="background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" name="submit" value="Search"></center>

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
