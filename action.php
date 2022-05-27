<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "server.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM category_list";
	$run_query = mysqli_query($induction,$category_query) or die(mysqli_error($con));
    // $result = mysqli_query($induction, "SELECT * FROM `product_list`");
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Product Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["id"];
			$cat_name = $row["name"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}

if(isset($_POST["page"])){
	$sql = "SELECT * FROM product_list";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li ' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM product_list LIMIT $start,$limit";
	$run_query = mysqli_query($induction,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['id'];
			$pro_cat   = $row['category_id'];
			$pro_title = $row['name'];
			$pro_price = $row['price'];
			$pro_image = $row['img_path'];
			$pro_desc = $row['description'];
			echo "
			
            
            	<div class='menu__item'>
                    <img src='img/tabs/$pro_image' alt='vegy'>
                	<div class='product-content'>
                    	<h3 class='menu__item-subtitle'>$pro_title</h3>
                    <div class='menu__item-descr'>$pro_desc</div>
                    </div>
                    <div class='menu__item-divider'></div>
                    <div class='containerloxa'>
                    	<div class='menu__item-total'><span>$pro_price</span> грн</div>
                    	<button class='btnm' data-popup='popup-order' data-id='$pro_id'>Добавить в корзину</button>
                    	<input hidden type='number' readonly value='1' min = 1 class='form-control text-center'  name='qty1' >
                    </div>
				</div>	

				
			";
		}
	}
}

if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["id"];
		$sql = "SELECT * FROM product_list WHERE category_id = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($induction,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['id'];
			$pro_cat   = $row['category_id'];
			$pro_title = $row['name'];
			$pro_price = $row['price'];
			$pro_image = $row['img_path'];
			$pro_desc = $row['description'];
			echo "
			<div class='menu__item'>
			<img src='img/tabs/$pro_image' alt='vegy'>
			<div class='product-content'>
				<h3 class='menu__item-subtitle'>$pro_title</h3>
			<div class='menu__item-descr'>$pro_desc</div>
			</div>
			<div class='menu__item-divider'></div>
			<div class='containerloxa'>
				<div class='menu__item-total'><span>$pro_price</span> грн</div>
				<button class='btnm' data-popup='popup-order' data-id='$pro_id'>Добавить в корзину</button>
				<input hidden type='number' readonly value='1' min = 1 class='form-control text-center'  name='qty1' >
			</div>
		</div>	
						
			";
		}
	}





	if(isset($_POST["get_seleted_Category1"])){
		if(isset($_POST["get_seleted_Category1"])){
			$id = $_POST["id"];
			$sql = "SELECT name FROM category_list WHERE id = '$id'";
		}
		
		$run_query = mysqli_query($induction,$sql);
		while($row=mysqli_fetch_array($run_query)){
				$pro_id    = $row['id'];
				$pro_title = $row['name'];
			
				echo "
				$pro_title
							
				";
			}
		}

?>






