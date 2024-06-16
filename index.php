<head> <link href=style.css rel=stylesheet type="text/css">
</head>
<?php


session_start();
if(isset($_SESSION['sid']))
    {
        header("location:image.php");
    }
else
{
if(isset($_REQUEST['sub']))
{ 
   
    $sid = $_REQUEST['sid'];
    $pwd = $_REQUEST['pwd'];
   // $date = $_REQUEST['date'];

    include "dbcon.php";
    

$r=mysqli_query($connection, "SELECT * FROM student_registration WHERE sid='$sid' AND pwd='$pwd'");
$c=mysqli_num_rows($r);
if($c>=1){
header("location:image.php");
  $_SESSION['sid']= $_REQUEST['sid'];
  } 
else
echo"<script>alert('StudentId and Password are not matched');</script>";



mysqli_close($connection);
}

}

?>
<script>

   
     
    function fun1()
    {
        document.getElementById('t1').focus();
    }
    function fun2()
    {
        uname =document.myform.t1.value;
        pwd = document.myform.t2.value;
        if(uname=="")
            {
                alert("please enter studentId");
                document.getElementById('t1').focus();
                return false;
            }
        else if(pwd=="")
            {
                alert("please enter password....");
                document.getElementById('t2').focus();
                return false;
            }
      /*  else if(uname != "vikas" || pwd != "0307")
            {
                alert("Invalid username & password");
                document.myform.t1.value="";
                document.myform.t2.value="";
                fun1();
                return false;
            }*/
    }
    
    
    
    
</script></head>

<body onload="fun1()">
    <div class="content">

        
       <center> <table class="tab" border=1 bgcolor=pink>
        <caption class="heading">Login</caption>
         <form name="myform" method="post"> <tr> <td>Username</td><td><input type=text id="t1" name="sid"></td></tr>
                       <tr> <td>Password</td><td><input type=text id="t2" name="pwd"></td></tr>
                        <tr align=center><td><input type=submit value=submit onclick="return fun2()" name="sub"></td><td><input type=reset value=reset onclick="fun1()"></td> </tr></form>
        </table></center>
            
    </div>
    
    
    
</body>