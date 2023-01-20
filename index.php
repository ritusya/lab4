<?php
  require_once 'connect.php';
  $goods = mysqli_query($connect, "SELECT * FROM `goods`");
  $goods = mysqli_fetch_all($goods);
//  echo "<pre>";
//  print_r($goods);
//  echo "</pre>";
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
   <h1 class="title"> Online shop</h1>
   <div class="list">
       <a class="list" href="list.php">show list of all items</a>
   </div>
    <div class="goods">
        <?php
        foreach ($goods as $item) {
        ?>
        
        <div class="card">
            <div class="item-image">
                <img src="<?php echo $item[4] ?>" alt="">
            </div>
            <div class="item-info">
                <h1><?php echo $item[1] ?></h1>
                <h2>$<?php echo $item[3] ?></h2>
            </div>
            <h4><?php echo $item[2] ?></h4>
            
        </div>
        <?php } ?>
        
    </div>
    
    
</body>
</html>
