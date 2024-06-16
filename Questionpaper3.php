<?php
if(isset($_REQUEST['sub']))
{ session_start();
  $_SESSION['marks2']=$_REQUEST['marks2'];
header("location:Questionpaper4.php");
}
?>
<script>
   function marks()
    {
        
        
        
        count=0;
        if(document.getElementById("x91").checked)
         count++;
       if(document.getElementById("x104").checked)
         count++;
       if(document.getElementById("x114").checked)
         count++;
       if(document.getElementById("x122").checked)
         count++;
       document.getElementById("t").value=count;  
        }
      
</script>   
<body bgcolor="powderblue">  

<table border=0 >
  <form>
<tr><td>9.Directives are translated by the<br>  
<input type ="radio" name=a id="x91" >Pre-processor<br>
<input type ="radio" name=a id="x92" > Compiler<br>
<input type ="radio" name=a id="x93" >Linker<br>
<input type ="radio" name=a id="x94" >Editor</td></tr>
<tr><td>10.What feature makes C++ so powerful?
<br>
<input type ="radio" name=b id="x101">Easy implementation<br>
<input type ="radio" name=b id="x102" >Reusing the old code<br>
<input type ="radio" name=b id="x103" >Easy memory management<br>
<input type ="radio" name=b id="x104" >All of the above </tr>
<tr><td>11.Each instance of a class has a different set of
<br>
<input type ="radio" name=c id="x111" >Class interfaces<br>
<input type ="radio" name=c id="x112" >Methods<br>
<input type ="radio" name=c id="x113" >Return types<br>
<input type ="radio" name=c id="x114" >Attribute values</td></tr>
<tr><td>12.C is _______ type of programming language.?<br>
<input type ="radio" name=d id="x121" >Object Oriented<br>
<input type ="radio" name=d id="x122" >Procedural<br>
<input type ="radio" name=d id="x123" >Bit level language<br>
<input type ="radio" name=d id="x124" >Functional</td></tr>
<tr><td ><input type="submit" value="continue" align=left onclick="marks()" name="sub"> <input type ="text"align=left id="t" name="marks2"></td></tr></form>
</table>
</body>