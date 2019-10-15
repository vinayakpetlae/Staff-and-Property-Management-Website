

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$sno=$_GET['Pno'];
		$Tel_no=$_GET['Rent'];

		$db_name="msccs2019_vnrp1";
		$sql_text="UPDATE property_for_rent set Rent='$Tel_no' where Pno='$sno'";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'Property Rent is not updated');
		else
			print ('Property Rent is updated');

		 echo '<form  action="prop_update_rent.php" method="post">
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
