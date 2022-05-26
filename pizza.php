<?php
include "server.php";
include "func.php";
session_start();
$menulist = get_products();
$result = mysqli_query($induction, "SELECT * FROM `product_list`");
$categ = mysqli_query($induction, "SELECT * FROM `category_list`");
$idd=$_GET['id']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="js/jquery2.js"></script>


    <title>Фу сколька можна</title>
    <link  href="css/pizza.css" rel="stylesheet">
   
</head>

<body>
    <header class="header">
    <div class="header__left-block">
        <div class="header__logo">
        <a href="index.php"><img src="icons/Group 5.svg" alt="Логотип"></a>
        </div>
    <div class="header__links">
        <a href="#" class="header__link">Меню </a>
        <a href="#" class="header__link">Корзина</a>

    </div>
        </div>
        <div class="header__right-block">
            <button data-modal class="btn btn_white">Связаться с нами</button>
        </div>
        
    </header>
    
    </div>
    
    <nav id="menuVertical">
    <?php if (!empty($categ)): ?>
                <?php foreach ($categ as $cat): ?>
		<ul>
			<li><a href="#"><div class="imgn" cid="<?=$cat['id'];?>"><img src="img/aside-icons/pizza.png"></div><p class ="loll" ><?=$cat['name'];?></p></a></li>
			
		</ul>
        <?php endforeach; ?>
                <?php endif; ?>
	</nav>
    
</form>
    <div class="menu">
        <h2 class="title">Пицца</h2>

        <div class="menu__field">
            <div class="container">
            <?php if (!empty($result)): ?>
                <?php foreach ($result as $product): ?>
            <div class="menu__item">
                    <img src="img/tabs/<?=$product['img_path'];?>" alt="vegy">
                    <div class="product-content">
                    <h3 class="menu__item-subtitle"><?=$product['name'];?></h3>
                    <div class="menu__item-descr"><?=$product['description'];?></div>
                    </div>
                    <div class="menu__item-divider"></div>
                    <div class="menu__item-price">
                    </div>
                    <div class="containerloxa">
                    <div class="menu__item-total"><span><?=$product['price'];?></span> грн</div>
                    <button class="btnm" data-popup="popup-order" data-id="<?= $product['id'] ?>">Добавить в корзину</button>
                    <input hidden type="number" readonly value="1" min = 1 class="form-control text-center"  name="qty1" >
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                

            </div>
        </div>
    </div>

    

    <footer class="footer">
        <div class="container">
            <div class="social">
                <div class="subtitle">Мы в социальных сетях:</div>
                <a href="https://www.instagram.com/oldieks/" class="link" Target="_blank"> instagram</a>
                <a href="#" class="link">facebook</a>
            </div>
            <div class="pepper">
                <img src="icons/veg.svg" alt="pepper">
            </div>
            <div class="call">
                <div class="subtitle">Или позвоните нам</div>
                <a href="#" class="link">+38 066 473 1105</a>
                <a href="#" class="link">+38 066 473 1105</a>
            </div>
        </div>
        <div id="get_category">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
    </footer>

    <div class="modal">
        <div class="modal__dialog">
            <div class="modal__content">
                <form action="#">
                    <div data-close class="modal__close">&times;</div>
                    <div class="modal__title">Мы свяжемся с вами как можно быстрее!</div>
                    <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                    <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="modal__input">
                    <button class="btn btn_dark btn_min">Перезвонить мне</button>
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/bundle.js"></script>
    
<script>
    // $('.btnm').click(function(){ 
    //         var id = $(this).data('id');
    //         var qty =$('[name="qty1"]').val();
	// 	// start_load()
	// 	$.ajax({
	// 		url:'admin/ajax.php?action=add_to_cart',
	// 		method:'GET',
	// 		data:{pid: id,qty:qty},
	// 		success:function(resp){
	// 			if(resp == 1 )
	// 				alert("Order successfully added to cart");
			// 		$('.item_count').html(parseInt($('.item_count').html()) + parseInt($('[name="qty1"]').val()))
			// 		end_load()
	// 		}
	// 	})
	// })
    $('.btnm').click(function(){ 
        var id = $(this).data('id');
            var qty =$('[name="qty1"]').val();
            console.log(id)
            start_load()
    $.ajax({
	url: '/lolkek.php',   
	method: 'get',            
	dataType: 'html',          
	data: {text: 'Товар добавлен в корзину',id:id,qty:qty},   
	success: function(data){   
		alert(data);            
        end_load();
	
    }
})
});

    </script>
</body>

</html>