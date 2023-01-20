<?php
  require_once 'connect.php';
  $goods = mysqli_query($connect, "SELECT * FROM `goods`");
  $goods = mysqli_fetch_all($goods);
  // echo "<pre>";
  // print_r($goods);
  // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>online shop</title>
</head>
<body>
  <a href="index.php" class="main-page">main page</a>
   <div class="box">
    <table class="table">
        <tr class="tr-head">
            <th class="t-id">id</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>image</th>
            <th>edit</th>
        </tr>
        <?php
          foreach ($goods as $item) {
            echo '
            <tr>
                <td class="td-edit">'.$item[0].'</td>
                <td class="td-edit">'.$item[1].'</td>
                <td>'.$item[2].'</td>
                <td class="td-edit">'.$item[3].'</td>
                <td class="td-edit"><a href="'.$item[4].'">🖼️</a></td>
                <td class="td-edit"><a href="update-form.php?id='. $item[0].'">&#9998</a><p>he</p><a href="delete.php?id='. $item[0].'">&#128465</a></td>
            </tr>
            ';
          }
        ?>
    </table>
    <form action="create.php" method="post">
       <h2>Add new item</h2>
        <p>Name</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price">
        <p>Image</p>
        <input type="text" name="image"> 
        <button type="submit">Add</button>
    </form>
    </div>
</body>
</html>
