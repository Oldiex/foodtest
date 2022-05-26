<?php
include "server.php";
$ppid = $_GET['id'] ;
$qtyy=$qty;
$categ = mysqli_query($induction, "INSERT INTO `cart`( `client_ip`, `user_id`, `product_id`, `qty`) VALUES ('1','1',$ppid,'1')");;
echo  $_GET['text'];