<head> <link href=style.css rel=stylesheet type="text/css"></head>
<?php
session_start();
if(!isset($_SESSION['sid']))

{ header("location:index.php");}
include "navbar.php";
?>



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
</style>



<body>
    <div class="content">
   <table border=1 cellspacing="0" cellpadding="5px" class="tab">
    <caption>Qualified List</caption>
   	<thead>
   	
   		<tr>
   			<th>Student Id</th>
        <th>Student Name</th>
   			<th>Marks</th>
   		</tr>
   </thead>
   

 <?php
include "dbcon.php";
$result = mysqli_query($connection , "SELECT * FROM student_registration WHERE marks>=8"); 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))
 {
echo "<tr><td>" . $row[0] . "</td><td>" . $row[2] . "</td><td>".$row[6]."</td><td><input type=button value=delete</td></tr>"; 
}
echo "</table>";	
?>

        
       
    </div>
    
    
    
</body>