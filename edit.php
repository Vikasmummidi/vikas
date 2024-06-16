<?php
include "dbcon.php";
if(isset($_GET['id']))
{$id= $_GET['id'];
 $qry=mysqli_query($connection,"SELECT*FROM student_registration WHERE sid = '$id'");
 $row = mysqli_fetch_array($qry, MYSQLI_NUM);
}

        if(isset($_REQUEST['upd']))
{
    $c1=$_REQUEST['t1'];
    $c2=$_REQUEST['t2'];
    $c3=$_REQUEST['t3'];
    $c4=$_REQUEST['t4'];
    $c5=$_REQUEST['t5'];
    $c6=$_REQUEST['t6'];
    
    


    /* Creating a database connection

    //$connection = mysqli_connect("localhost", "root", "123456", "practice_vs");
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

    /*$p=mysqli_query($connection,"SELECT*FROM student_registration WHERE sid = '$c1'");

    if(mysqli_num_rows($p)>0)
    {
        echo "<script>alert('Student Id already exists enter another student Id');</script>";
    }

   else*/
   {    
   
   $q=mysqli_query($connection, "UPDATE student_registration SET pwd='$c2',sname='$c3',qualification='$c4',branch='$c5',phno='$c6' WHERE sid='$c1'");

   if(!$q) 
        die(mysqli_connect_error());
    echo "<script>alert('Hell0!!!!');</script>";

      header("location:studentdetails.php");
   mysqli_close($connection);
    }
}?>
 



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
        m1=/^[a-zA-Z][a-zA-Z\\s]+$/;
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
    <div class="content" >
        
       <table class="tab" border=1 bgcolor=pink>
        <caption class="heading">Student Registration form </caption>
         <form action="" name="myform" method="post"> <tr> 
            <td>Student Id</td><td><input type=text id="Id" name="t1" value="<?php echo $row[0];?>"></td></tr>
                       <tr> <td>Password</td><td><input type=text id="pwd" name="t2" value="<?php echo $row[1];?>"></td></tr>
                       <tr> <td>Student Name</td><td><input type=text id="name" name="t3" value="<?php echo $row[2];?>"></td></tr>
                       <tr> <td>Qualification</td><td><select id="select" name="t4" value="<?php echo $row[3];?>"><option value="0">--select--</option>
                                                            <option value="Btech" <?php if ($row[3]=="Btech")echo "selected"?>
                                                                
                                                            
                                                                >Btech</option>
                                                            <option value="Mtech"<?php if ($row[3]=="Mtech")echo "selected"?>>Mtech</option>
                           <option value="MBA"<?php if ($row[3]=="MBA")echo "selected"?>>MBA</option></select></td></tr>
                       <tr> <td>Branch</td><td><input type=text id="branch" name="t5" value="<?php echo $row[4];?>"> 
                           </td></tr>
                       <tr> <td>PhoneNo</td><td><input type=text id="mob" name="t6" value="<?php echo $row[5];?>"></td></tr>
                        <tr><td><input type=submit value=Update name="upd" onclick="return f1()"></td><td></td> </tr></form>
        </table>
            
    </div>
    
    
    
</body>