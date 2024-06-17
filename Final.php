

<?php
session_start();
$n = $_SESSION['sid'];
echo"<br>";
include "dbcon.php";	


$a = $_SESSION['mark'];
$b = $_SESSION['marks1'];
$c =$_SESSION['marks2'];
$d = $_REQUEST['marks3'];
$e= $a+$b+$c+$d;


$result = mysqli_query($connection , "UPDATE student_registration SET marks=$e WHERE sid='$n'"); 



?>
<!DOCTYPE html>
<html>
<head>
	<style>
	.container{
		color: black;
		background-color: powderblue;
		font-style:italic;
		font-weight: 900;
	    font-size:25px;
	    text-align:center;
	    width: 50%;
	    margin: auto;
	    padding: 20px;
	    border-radius:10px;
	}
</style>
	<meta charset="utf-8">
	<title>Final</title>
</head>
<body>
	<div class="container">
		<label>Student Id</label>:<?php echo $n;?><br>
		<label>Marks</label>:<?php echo $e;?><br> <br>
		<form action="index.php">
		<input type=submit value=Finish>
	</form>


	</div>

</body>
</html>