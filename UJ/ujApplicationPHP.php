<?php
require "../php/conn.php";
session_start();
$id = (int)$_SESSION['user_id'];
$first = $_POST["firstChoice"];
$second = $_POST["secondChoice"];
$third = $_POST["ThirdChoice"];


$mysql_ins="insert into uj_application (COURSE1, COURSE2, COURSE3, USER_ID) values ('$first', '$second', '$third', $id);";
$result = mysqli_query($conn,$mysql_ins);
if  ($result)
{
   echo "YOU HAVE SUCCESSFULY CAPTURED YOUR WITS APPLICATION <br>";
   echo "<p><a href='../php/dashboard.php'>CLICK HERE TO GO BACK</a></p>";
   $_SESSION['finish']=$_SESSION['finish']+1;
}
else
{
    echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
    echo "<p><a href='ujApplication.php'>CLICK HERE TO GO BACK</a></p>";
}


 ?>
