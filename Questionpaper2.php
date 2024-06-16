<?php
if(isset($_REQUEST['sub']))
  {session_start();
  $_SESSION['marks1']=$_REQUEST['marks1'];
header("location:Questionpaper3.php");
}
?>
<script>
   function marks()
    {
        
                count=0;
        if(document.getElementById("x54").checked)
         count++;
       if(document.getElementById("x61").checked)
         count++;
       if(document.getElementById("x73").checked)
         count++;
       if(document.getElementById("x83").checked)
         count++;
       document.getElementById("t").value=count;  
        
    }
</script>   
<body bgcolor="powderblue">  
<form>
<table border=0 >

<tr><td>5.C What is the 16-bit compiler allowable range for integer constants?<br>  
<input type ="radio" name="a" id="x51" >-3.4e38 to 3.4e38<br>
<input type ="radio" name="a" id="x52" > -32767 to 32768<br>
<input type ="radio" name="a" id="x53" >-32668 to 32667<br>
<input type ="radio" name="a id="x54" >-32768 to 32767 </td></tr>
<tr><td>6.What is required in each C program?<br>
<input type ="radio" name="b" id="x61">The program must have at least one function.<br>
<input type ="radio" name="b" id="x62" >The program does not require any function.<br>
<input type ="radio" name="b" id="x63" >Input data<br>
<input type ="radio" name="b" id="x64" >Output data </tr>
<tr><td>7.What is a lint?<br>
<input type ="radio" name="c" id="x71" >C compiler<br>
<input type ="radio" name="c" id="x72" >Interactive debugger<br>
<input type ="radio" name="c" id="x73" >Analyzing tool<br>
<input type ="radio" name="c" id="x74" >C interpreter </td></tr>
<tr><td>8.In the C language, the constant is defined _______.<br>
<input type ="radio" name="d" id="x81" >Before main<br>
<input type ="radio" name="d" id="x82" >After main<br>
<input type ="radio" name="d" id="x83" >Anywhere, but starting on a new line.<br>
<input type ="radio" name="d" id="x84" >None of the these.</td></tr>
<tr><td ><input type="submit" value="continue" align=left onclick="marks()" name="sub"> <input type ="text"align=left id="t" name="marks1"></td></tr></form>
</table>
</body>