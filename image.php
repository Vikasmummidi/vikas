<?php


session_start();
if(!isset($_SESSION['sid']))
{ header("location:index.php");
}
?>

<style>
.main img
    {

       width:100%;
        height:85%;
    }
    nav
    {
    width:100%;
    margin:0; 
    }
    nav ul
    {
    background-color:#eee;/*#eee*/  
    overflow:hidden;
    margin:0;
    padding:0;
	}
ul.topnav li
{
    list-style:none;
    float:left;
}
ul.topnav li.topnav-right{
    float:right;
}
ul.topnav li a, ul.topnav li span{
    display: block;
    text-decoration:none;
    min-height: 16px;
    padding:14px;
    text-transform: uppercase;
    color:#666;
}
ul.topnav li a:hover{
    background-color:blue;
    color:white;
}
body{
        background-color:lightyellow;

    }
    .header{
        color:blue;
        background-color: pink;
        display:block;
        border-radius:10px;
        width:267px;
        font-family:serif;
        padding:5px;
        margin: auto;
        margin-top:20px;
        margin-bottom: 10px;
     
    }   
  .caption 
    {
   
        font-weight:400;
        letter-spacing: 3px;
        font-size:18px;
        color:red;
        display:inline;
        margin-left:42.5%;
       
        
    }               
    .heading
    {
      font-weight: 900;
        font-size: 25px;
        
    }
    .heading img{
        height:20px;
    }
    .container
    
    {
     margin-top: 2.5%;
    }
    .button
    {
        padding:5px;
        color:white;
        background:blue;
        display:inline;
        margin-left:23%;
    }





</style>
<body>
<div class="header">
    <div class="heading"><img src="2.png">AMITY UNIVERSITY</div></div>
<div class="caption"> we nurture the talent....</div>
</div>
    <div><?php include "navbar.php";?></div>
	<div class="main"><img  src=3.png ></div></body>
