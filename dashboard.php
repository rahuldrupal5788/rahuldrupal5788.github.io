<?php include('functions.php') ?>
<?php
  if(empty($_SESSION['user_type'])) {
    header('location: admin.php');	
  } 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="sidenav">
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#clients">Clients</a>
      <a href="index.php?logout='1'">Logout</a>
    </div>

    <div class="main">
      <h2>Send messages to desired recipients</h2>
      <p>This sidebar is of full height (100%) and always shown.</p>
      <p>Scroll down the page to see the result.</p>
      <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
    </div>

  </body>
</html> 