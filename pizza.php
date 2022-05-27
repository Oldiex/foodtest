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


    <title>Menu</title>
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
        <!-- <a href="#" class="header__link">Корзина</a> -->
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Кошик</button>
  <div id="myDropdown" class="dropdown-content">
    <div class="dropdownheader" style = "width:400px">
        <div class="stroka">
            <div class="proverka">text</div>
            

        </div>
    </div>
    
  </div>
</div>

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
		<ul class ="img3">
			<li class = "imgn1" cid="<?=$cat['id'];?>"><a href="#"><div class="imgn" ><img class ="" src="img/aside-icons/pizza.png"></div><p class ="loll" ><?=$cat['name'];?></p></a></li>
			
		</ul>
        <?php endforeach; ?>
                <?php endif; ?>
	</nav>
    
</form>
    <div class="menu">
        <h2 class="title">Меню</h2>

        <div class="menu__field">
        <div class="container" id = "meniii"></div>
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




// drop down menu

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// end
    </script>
</body>

</html>