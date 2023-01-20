<?php
  require_once 'connect.php';
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image = $_POST['image'];
  $id = $_POST['id'];
  mysqli_query($connect, "UPDATE `goods` SET `name` = '$title', `description` = '$description', `price` = '$price', `image` = '$image' WHERE `goods`.`id` = '$id'");
  header('Location: list.php');


?>
