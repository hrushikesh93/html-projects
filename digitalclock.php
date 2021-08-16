<!DOCTYPE html> 
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> <head> 
 <meta charset="utf-8" /> 
 <meta http-equiv="refresh" content="1"/>  <link rel="stylesheet"> 
 <title>Digital Clock</title> 
</head> 
<body> 
 <div class="header"> 
 <h1>1CR18CS074 DIGITAL_CLOCK</h1>  </div> 
 <p> 
 <?php 
  
 date_default_timezone_set('Asia/Kolkata');  // showing date and time of INDIA;  echo date( 'h:i:s A', time ());  ?> 
 </p> 
</body> 
<style> 
 p { 
 background-color:lightgreen; 
 color: black; 
 padding:200px 50px 50px 600px; 
 border:10px solid skyblue; 
 border-radius:0%; 
 } 
 body{ 
 background-color:lightgreen; 
 } 
 .header { 
 background-color: cornflowerblue; 
 text-align: center;
 padding-top: 50px; 
 color: black 
 padding-bottom: 50px; 
 } 
</style> 
</html> 
