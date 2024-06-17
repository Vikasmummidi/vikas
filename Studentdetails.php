<?php

session_start();
if(!isset($_SESSION['sid']))

{ header("location:index.php");}
else{
	include "dbcon.php";
$sid= $_SESSION['sid'];
//echo ($sid);
$qry="SELECT ROLE FROM student_registration WHERE sid='$sid'";
$result=mysqli_query($connection, $qry);
$row=mysqli_fetch_assoc($result);
if($row["ROLE"]!= 1)
{
  header("location:image.php");
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
<title>Student Details</title></head>

<!-- 
<style>

	body
	{
		background-attachment: fixed;
		
	}
	table
	{
		border: 1px  #9F9F9A ;
        font: 16px sans-serif;
        margin:auto;
	}
	thead
	{
		color: #FDFEFE ;
		background-color: #3346FF;


	}
	thead > th
	{
		text-align: center;
		font-weight: 900;

		
    }
    td
    {
    	padding:6px;
    	text-align:center;
    }
</style> -->



<body>
    <div class="container-fluid">
    	
    	<?php include "navbar.html";?>

   <table border=1 cellspacing="0" cellpadding="5px" class="table table-striped table-bordered align-middle">
    <caption>Registered Students</caption>
   	<thead class="table-primary">
   	
   		<tr>
   			<th>Student Id</th>
        <th>password</th>
   			<th>Name</th>
   			<th class=>Qualification</th>
   			<th>Branch</th>
   			<th>phone number</th>
   			<th>Action</th>
   			<th>Delete</th>

   		</tr>
   </thead>
   

 <?php
 $per_page=2;
 if(isset($_GET['page']))
 {
 $pageno=$_GET['page'];
 $start=($pageno-1)*2;
}
else
{
	$pageno=1;
	$start=0;
}


$result = mysqli_query($connection , "SELECT * FROM student_registration LIMIT $start, $per_page"); 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))
 {
echo "<tr><td>" . $row[0] . "</td><td>" 
. $row[1] . "</td><td>".$row[2]."</td><td>"
.$row[3]."</td><td>".$row[4]."</td><td>"
.$row[5]."</td>
<td><a href=edit.php?id=".$row[0]." class= 'btn btn-primary'>Edit</a></td><td><a class='btn btn-outline-danger' href=delete.php?id=".$row[0]."><i class='bi bi-trash-fill'></i></a></td></tr>"; 
}
echo "</table>";	

?>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    
    <?php
    
    if($pageno>1)
    {
    $pagep=$pageno-1;
    echo("<li class=page-item>
      <a class='page-link' href='studentdetails.php?page=$pagep'>previous</a>
    </li>");}
  
    for($i=1;$i<4;$i++)
    {
    	if ($i==$pageno)
    	$active="active";
      else
      	$active="";
    	echo "<li class='page-item $active'><a class='page-link' href='studentdetails.php?page=$i'>$i</a></li>";

    
    }
    if($pageno<3)
    {
    $pagen=$pageno+1;
    
    echo("<li class=page-item>
      <a class='page-link' href='studentdetails.php?page=$pagen'>Next</a>
    </li>");
    }
  

    ?>
    
    
  </ul>
</nav>
<script src="js/bootstrap.min.js" ></script>  
</body>
</html>