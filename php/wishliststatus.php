<?php
session_start();

$userid = (int)$_SESSION['user_id'];
require "conn.php";

$mysql_qry = "select course from wishlist where user_id like '$userid' ;";
$result = mysqli_query($conn,$mysql_qry);
$output_array = array();

if ( mysqli_num_rows( $result ) > 0 )
{
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($output_array, $row);
  }
  echo json_encode($output_array);
}
else
{
	echo json_encode("0 results");
}
#echo "something in php";
 ?>
