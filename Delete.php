<?php
echo "<script>if(confirm('do you want to delete')){";

include "dbcon.php";
if(isset($_GET['id']))
{
    $id= $_GET['id'];
    $q=mysqli_query($connection, "DELETE FROM student_registration WHERE sid = '$id' ");
    if(!$q)
    die(mysqli_connect_error());
    header("location:studentdetails.php");
}
echo"}</script>";
?>