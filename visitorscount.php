

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>

  <?php 
  
  session_start();
     
  if(isset($_SESSION['views']))
      $_SESSION['views'] = $_SESSION['views']+1;
  else
      $_SESSION['views']=1;
        
  echo"<h1 style='color: red;'>no of people visited </h1> <h2 style='color: green;'>".$_SESSION['views']."</h2>";

  echo "<p style='text-align: center;'>indraja_1CR18CS075</p>";


  ?>
  </body>

  </html>
