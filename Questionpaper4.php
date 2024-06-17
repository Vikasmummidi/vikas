<script>
   function marks()
    {
        
        
        
        count=0;
        if(document.getElementById("x133").checked)
         count++;
       if(document.getElementById("x144").checked)
         count++;
       if(document.getElementById("x154").checked)
         count++;
       if(document.getElementById("x164").checked)
         count++;
       document.getElementById("t").value=count;  
        }
      
</script>   
<body bgcolor="powderblue">  

<table border=0>
<form action="Final.php">
<tr><td>13.C language was invented in which laboratories.?<br>  
<input type ="radio" name=a id="x131" >Uniliver Labs<br>
<input type ="radio" name=a id="x132" > IBM Labs<br>
<input type ="radio" name=a id="x133" >AT and T Bell Labs<br>
<input type ="radio" name=a id="x134" >Verizon Labs</td></tr>
<tr><td>14.C language was invented to develop which Operating System.?
<br>
<input type ="radio" name=b id="x141">Android<br>
<input type ="radio" name=b id="x142" >Linux<br>
<input type ="radio" name=b id="x143" >Ubuntu<br>
<input type ="radio" name=b id="x144" >Unix</tr>
<tr><td>15.C language is used in the development of .?
<br>
<input type ="radio" name=c id="x151" >Databases<br>
<input type ="radio" name=c id="x152" >Graphic applications<br>
<input type ="radio" name=c id="x153" >Word Processors<br>
<input type ="radio" name=c id="x154" >All of the above</td></tr>
<tr><td>16.A C program is a combination of.?<br>
<input type ="radio" name=d id="x161" > Statements<br>
<input type ="radio" name=d id="x162" >Functions<br>
<input type ="radio" name=d id="x163" >Variables<br>
<input type ="radio" name=d id="x164" >All of the above</td></tr></td></tr>
<tr><td ><input type="submit" value="continue" align=left onclick="marks()"> <input type ="text"align=left id="t" name="marks3"></td></tr></form>
</table>
</body>