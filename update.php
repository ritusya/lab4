<?php
  require_once 'connect.php';
  $goods_id = $_GET['id'];
  $good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id' ");
  $good = mysqli_fetch_assoc($good);
  // print_r($good);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <div class="upd-box">
    <form action="update-method.php" method="post">
        <input type="hidden" name="id" value="<?= $good['id'] ?>">
        <p>Name</p>
        <input type="text" name="title" value="<?= $good['name'] ?>">
        <p>Description</p>
        <textarea name="description"><?= $good['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $good['price'] ?>">
        <p>Image</p>
        <input type="text" name="image" value="<?= $good['image'] ?>">
        <button type="submit">Update</button>
    </form>
    <img src="<?php echo $good['image'] ?>" alt="">
</div>
</body>
</html>
