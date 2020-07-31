<?php include('functions.php') ?>
<?php
  if(isset($_SESSION['user_type'])) {
    header('location: dashboard.php');	
  } 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">  
  </head>
  <body>
    <div class="header">
      <h2>Administrator</h2>
    </div>
    <form method="post" action="admin.php">
      <?php echo display_error(); ?>
      <div class="input-group">
        <label>Admin Code</label>
        <input type="text" name="admincode" value="<?php echo $admincode; ?>">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Submit</button>
      </div>
    </form>
  </body>
</html>