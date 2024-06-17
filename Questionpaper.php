<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>





<?php
if(isset($_REQUEST['sub']))
{ session_start();
  $_SESSION['mark']=$_REQUEST['mark'];
header("location:Questionpaper2.php");
}
?>
<script>
   function marks()
   
        
        
        {
          
        count=0;
        if(document.getElementById("x11").checked)
         count++;
       if(document.getElementById("x22").checked)
         count++;
       if(document.getElementById("x32").checked)
         count++;
       if(document.getElementById("x43").checked)
         count++;
       document.getElementById("t").value=count;  
        }
      
</script>   
<body bgcolor="powderblue"> 
 

<table border=0 >
<form>
<tr><td>1.C language is __________<br>  
<input type ="radio" name=a id="x11" >middle level<br>
<input type ="radio" name=a id="x12" >high level<br>
<input type ="radio" name=a id="x13" >low level<br>
<input type ="radio" name=a id="x14" >none </td></tr>
<tr><td>2.C language is developed by __________<br>
<input type ="radio" name=b id="x21">Thomson<br>
<input type ="radio" name=b id="x22" >Dennis Ritche<br>
<input type ="radio" name=b id="x23" >Ansi<br>
<input type ="radio" name=b id="x24" >Boreland </tr>
<tr><td>3.Extension of Source program is __________<br>
<input type ="radio" name=c id="x31" >.cpp<br>
<input type ="radio" name=c id="x32" >.c<br>
<input type ="radio" name=c id="x33" >exe<br>
<input type ="radio" name=c id="x34" >obj </td></tr>
<tr><td>4.Break is __________<br>
<input type ="radio" name=d id="x41" >constant<br>
<input type ="radio" name=d id="x42" >variable<br>
<input type ="radio" name=d id="x43" >keyword<br>
<input type ="radio" name=d id="x44" >none</td></tr>
<tr><td ><input type="submit" value="continue" align=left onclick="marks()" name="sub"> <input type ="text"align=left id="t" name="mark"></td></tr></form>
</table>
</body>
</html>