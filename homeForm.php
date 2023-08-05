<?php
session_start();
if (isset($_POST['submit'])){
$name = $_POST['name'];
$price = $_POST['price'];
$img= $_POST['image'];
$description=$_POST['Textarea'];
if(!isset($_SESSION['product'])){
  $_SESSION['product'][]=array(
    'name'=>$name, 
    'price'=>$price,
    'image'=>$img,
    'description' =>$description
);
}
else{
    $_SESSION['product'][]=array(
        'name'=>$name, 
        'price'=>$price,
        'image'=>$img,
        'description' =>$description
    );
}

header("Location:home.php");
}

?>
