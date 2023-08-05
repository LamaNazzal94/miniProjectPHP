<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</html>
<body>
    <?php include 'nav.php'; ?>
<?php
if (isset($_SESSION['product'])){
    foreach($_SESSION['product'] as $value){
    ?>
    <div class="card" style="width:70%;">
  <img src="<?php echo $value["image"]; ?>" class="card-img-top" alt="product image" style="width:200px">
  <div class="card-body">
    <h5 class="card-title"><?php echo  $value["name"];?></h5>
    <p class="card-text"><?php echo  $value["price"];?></p>
  
  </div>
</div>
 <?php 
    }}
 ?>
  <?php include 'footer.php'; ?>
 </body>
    



 
 