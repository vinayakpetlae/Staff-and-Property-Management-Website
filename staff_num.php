<body>
<html>

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$staffnum=$_GET['staffnum'];
		$db_name="msccs2019_vnrp1";
		$sql_text="select FName,LName,Address,Tel_No,Position,Sex,DOB,Salary from staff where Sno='$staffnum'";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");
		$result=mysqli_query($conn_id,$sql_text)
			or exit("Could not execute the query");
		print("<table>\n");
		while($row=mysqli_fetch_row($result))
		{
			print("<tr>\n");
			for ($i=0;$i<mysqli_num_fields($result); $i++)
			{
				printf ("<td>%s</td>\n", htmlspecialchars($row[$i]));
			}
			print("</tr>\n");
		}
		print("</table>\n");

		mysqli_free_result($result);
		
		 echo '<form  action="staffname_form.php" method="post">
            <input style="background-color: purple;border: none;color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" value="Go Back and View Table" name="Go Back and view Table">
        </form>';
	?>
</body>
</html>
