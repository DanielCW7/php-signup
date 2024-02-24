<?php 
  $user = 'Connor'
?>

<!DOCTYPE html>
<html>
  <head>
    <title>echo Command</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?php echo $user; ?>  page</h2>
    <?php echo '<p class="offer">Offer: 99% off</p>' ?>
  </body>
</html>