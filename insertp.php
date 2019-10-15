

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$sno=$_GET['Pno'];
		$Fname=$_GET['Street'];
		$Lname=$_GET['Area'];
		$Address=$_GET['City'];
		$Tel_No=$_GET['Pcode'];
		$Position=$_GET['Type'];
		$Sex=$_GET['Rooms'];
		$DOB=$_GET['Rent'];
		$Salary=$_GET['Ono'];
		$NIN=$_GET['Sno'];
		$Bno=$_GET['Bno'];
		$db_name="msccs2019_vnrp1";
		$sql_text="INSERT INTO `property_for_rent` (`Pno`, `Street`, `Area`, `City`, `Pcode`, `Type`, `Rooms`, `Rent`, `Ono`, `Sno`, `Bno`)
		VALUES ('$sno', '$Fname', '$Lname', '$Address', '$Tel_No', '$Position', '$Sex', '$DOB', '$Salary', '$NIN', '$Bno')";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'VALUES Not INSERTED');
		else
			print ('PROPERTY DETAILS INSERTED');

		 echo '<form  action="prop_insert.php" method="post">
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
