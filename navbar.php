<?php
{
include "dbcon.php";
$sid= $_SESSION['sid'];
//echo ($sid);
$qry="SELECT ROLE FROM student_registration WHERE sid='$sid'";
$result=mysqli_query($connection, $qry);
$row=mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html>
 
<head>

    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>navbar</title></head>
    <span class="content">

    <nav>
    <ul class="topnav" id="dropdownClick">
        <li><a class="active" href="image.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <?php if($row["ROLE"]==1)echo'<li><a href="Studentregistration.php"> Stutdent Registration</a></li>';?>
        <li><a href="studentloginform.php">Student login</a></li>
        <?php if($row["ROLE"]==1) echo'<li><a href="studentdetails.php">Student Details</a></li>';?>
        <li><a href="Qualifiedlist.php">Qualified list</a></li>
        <li><a href="Disqualified.php">Disqualified list</a></li>
        <li class=topnav-right><a href='logout.php'>Logout</a></li>
    <li class=topnav-right><span><?php echo "hello ". $_SESSION['sid'];?></span></li>
    <li class="dropdownIcon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
    </ul>
    </nav>

<body>
    <script type="text/javascript" src="dd.js"></script>

</body>
</span>
</html>








