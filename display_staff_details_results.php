<?php

		require_once"database_connect.php";
		$conn_id=conection();

$sgreater=$_GET["sgreater"];
$slesser=$_GET["slesser"];

$query="select Sno,LName,FName from staff where Salary> 0 and Salary < 0";
if($sgreater != "" and $slesser!="")
{
	$query="select Sno,LName,FName from staff where Salary> '$sgreater' and Salary < '$slesser'";
	printf("Staff whose Salary > %s and < %s are:",$sgreater,$slesser);
}
elseif($sgreater != "")
{
	$query="select Sno,LName,FName from staff where Salary> '$sgreater'";
	printf("Staff whose Salary > %s are:",$sgreater);
}
elseif($slesser!="")
{
	$query="select Sno,LName,FName from staff where Salary< '$slesser'";
	printf("Staff whose Salary < %s are:",$slesser);
}

$result=mysqli_query($conn_id,$query);

print("<style>td{border-left:1px solid black;border-top:1px solid black;}table{border-right:1px solid black;border-bottom:1px solid black;}</style>");

print("<table>");
print("<tr><td>Sno</td><td>FName</td><td>LName</td></tr>");

while($row=mysqli_fetch_assoc($result))
{
	print("<tr>");
	printf("<td> %s </td>",htmlspecialchars($row['Sno']));
	printf("<td> %s </td>",$row['FName']);
	printf("<td> %s </td>",$row['LName']);
	printf("</tr>");
}
print("</table>");

?>