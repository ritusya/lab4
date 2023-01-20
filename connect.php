<?php
  $connect = mysqli_connect('localhost', 'root', 'root', 'lab4');
  if(!$connect) {
    die('error N0_1 with connection');
  }
