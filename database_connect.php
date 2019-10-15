<html>
<body>

<?php
function conection()
{
  $server="cs1.ucc.ie";
  $username="vnrp1";
  $paswd="ahzei";
  $db_name="msccs2019_vnrp1";
  $conn_id=mysqli_connect($server,$username,$paswd,$db_name)
    or exit("Login Failed".mysql_error());
  if($conn_id && mysqli_select_db($conn_id,$db_name))
    return($conn_id);
  return (FALSE);
}
 ?>
</body>
</html>
