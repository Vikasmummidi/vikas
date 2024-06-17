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
<!DOCTYPE html>
<html >
<head><link href="style.css" type="text/css" rel=stylesheet>
<style>
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap');
</style>
<style>
table{
    background-color: #abdbde;
    padding:10px;
    border-radius: 10px;

}
td{
    
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: bolder;
    color: #3b3d3d;
    text-align: left;
}

</style></head>

<?php
if(isset($_REQUEST['sub']))
{
    $c1=$_REQUEST['t1'];
    $c2=$_REQUEST['t2'];
    $c3=$_REQUEST['t3'];
    $c4=$_REQUEST['t4'];
    $c5=$_REQUEST['t5'];
    $c6=$_REQUEST['t6'];
    
    //echo $c1.$c2.$c3.$c4.$c5.$c6;


   /* // Creating a database connection

    $connection = mysqli_connect("localhost", "root", "123456", "practice_vs");
    if (!$connection) 
    {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "practice_vs");
    if (!$db_select)
     {
        die("Database selection failed: " . mysqli_connect_error());
    }*/

    $p=mysqli_query($connection,"SELECT*FROM student_registration WHERE sid = '$c1'");

    if(mysqli_num_rows($p)>0)
    {
        echo "<script>alert('Student Id already exists enter another student Id');</script>";
    }

   else
   {
   
   $q=mysqli_query($connection, "insert into student_registration(sid,pwd,sname,qualification,branch,phno)values('$c1','$c2','$c3','$c4','$c5','$c6')");
   if(!$q)
        die(mysqli_connect_error());
    else
       echo "<script>alert('Record succesfully inserted')</script>";
   mysqli_close($connection);
    }
}

?>

<script>
    function f1()
    {
        t=document.myform.Id.value;
        t1=document.myform.name.value;
        t2=document.myform.pwd.value;
        len2=t2.length;
        t3=document.myform.mob.value;
        t4=document.myform.branch.value;
        t5=document.myform.select.value;
       m=/^([0-9])+$/;
        m1=/^([a-zA-Z\-])+$/;
        m2=/^([A-Z0-9_-])*$/;

       
        
        //id validation
        if(t != "" && t.match(m2))
            {
                document.myform.pwd.focus();
                    
                 //password validation
            if(len2<6||len2>12)
            {
                alert("password should be between 6-12 characters"); 
                document.myform.pwd.focus();
                return false;
                    
            }
                else
                    {
                        document.myform.name.focus();
                        //name validation
                        if(t1.match(m1) && t1!="")
                            {
                                document.myform.select.focus();
                                //Qualification validation
                                if(t5=="--select--")
                                    {
                                        alert("please select your Qualification");
                                    }
                                else
                                    {
                                        document.myform.branch.focus();
                                        //branch validation
                                        if(t4.match(m1))
                                            {
                                                document.myform.mob.focus();
                                                //phonenumber validation
                                                if(t3.match(m)&&t3.length==10)
                                                    {
                                                        return true;
                                                    }
                                                else{
                                                    alert("please enter a valid 10 digit phone number");
                                                }
                                            }
                                        else
                                            {
                                                alert("Branch should contain only letters");
                                            }
                                    }
                                return false;
                            }
                        else
                            {
                                alert("Name should contain only letters");
                                return false;
                            }
                            
                            
                        
                    }
            }
        else 
            {
                alert("Please enter Student Id should contain only uppercase letters and Numbers");
                document.myform.Id.focus();
                return false;
            }
        function fun2()
        {
            document.write("Student Registration successful");
        }
      
     
    }
</script>
<body> 
    <div><?php include("navbar.html");?></div>
    <div class="content" >
       
        
       <table class="tab" border=0>
        <caption class="heading">Student Registration form </caption>
         <form action="" name="myform"> <tr> <td>Student Id</td><td><input type=text id="Id" name="t1"></td></tr>
                       <tr> <td>Password</td><td><input type=text id="pwd" name="t2"></td></tr>
                       <tr> <td>Student Name</td><td><input type=text id="name" name="t3"></td></tr>
                       <tr> <td>Qualification</td><td><select id="select" name="t4"><option>--select--</option>
                                                            <option>Btech</option>
                                                            <option>Mtech</option>
                           <option>MBA</option></select></td></tr>
                       <tr> <td>Branch</td><td><input type=text id="branch" name="t5"> 
                           </td></tr>
                       <tr> <td>PhoneNo</td><td><input type=text id="mob" name="t6"></td></tr>
                        <tr><td><span class="btn"><input type=reset value=reset></span></td><td><span class="btn"><input type=submit value=submit name="sub" onclick="return f1()"></span></td> 
                        </tr></form>
        </table>
            
    </div></body></html>