<?php
  require_once 'connect.php';
   print_r($_POST);
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image = $_POST['image'];

  mysqli_query($connect, "INSERT INTO `goods` (`id`, `name`, `description`, `price`, `image`) VALUES (NULL, '$title', '$description', '$price', '$image')");

  header('Location: list.php');

?>
