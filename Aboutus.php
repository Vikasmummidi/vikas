<?php
session_start();
if(!isset($_SESSION['sid']))

{ 
    header("location:index.php");
}

?>



    
<head><link href="style.css"
	rel=stylesheet type="text/css">
    
</head>
	
<body>
<?php include "navbar.php";?>
<div class="background">
	<div class="content">
    <P class="p1"> A very warm welcome to amity online...</P>
<P class="p2"> This maity online testing website offers you to practice online programming test based on c/c++/html/php/data base management systems etc and find how much you score before you appear for your actualexaminations. you can freely register and login to take our 20 question tour to find out your knowledge and may be learn some new things along the way.  Qualifying mark is 50% of the total questions and your results will be immediately displayed after you complete the test.<br>
    To start with, firstly register by clicking on the specified link above..</P>
<P class="p3"> Thankyou</P></div>
        </div> 
</body>