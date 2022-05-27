<?php
include "server.php";
include "func.php";

// debug($products);
$menulist = get_products();
$result = mysqli_query($induction, "SELECT * FROM `menulist` where dailymenu = '1'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фу сколька можна</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>
    <header class="header">
    <div class="header__left-block">
        <div class="header__logo">
        <a href="#"><img src="icons/Group 5.svg" alt="Логотип"></a>
        </div>
    <div class="header__links">
        <a href="pizza.php" class="header__link">Меню </a>
        <!-- <a href="#" class="header__link">Корзина</a> -->

    </div>
        </div>
        <div class="header__right-block">
            <button data-modal class="btn btn_white">Зворотний дзвiнок</button>
        </div>
        
    </header>
    
    </div>
    <nav id="menuVertical">
		<ul>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/pizza.png"></div><p class ="loll">Пицца</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/hamburger.png"></div><p class ="loll">Бургер</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/sushi.png"></div><p class ="loll">Суши</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/hot-soup.png"></div><p class ="loll">Супы</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/salad.png"></div><p class ="loll">Салаты</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/fried-potatoes.png"></div><p class ="loll">Гарнир</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/ice-cream.png"></div><p class ="loll">Десерт</p></a></li>
			<li><a href="#"><div class="imgn"><img src="img/aside-icons/sparkling-water.png"></div><p class ="loll">Напитки</p></a></li>
		</ul>
	</nav>
    <div class="preview">
        <div class="bgc_blue"></div>
        <div class="container">
            <div class="tabcontainer">
                <div class="tabcontent ">
                    <img src="img/tabs/vegy.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Наша компанія розпочала свій шлях у 2022 році. Розпочали проацювати як компанія, що доставляє їжу містом
                        та його околицями. У нас багатий вибір страв та напоїв. Ми завжди контролюємо приготування страв та 
                        готоуємо лише зі свіжих продуктів.
                       
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/elite.jpg" alt="elite">
                    <div class="tabcontent__descr">
                    Нам подобається дивувати Вас, і ми часто проводимо різні розіграші піци та ролів, 
                    якщо хочете постійно бути в курсі підпивайтеся на наш інстаграм, щоб нічого не пропустити
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/post.jpg" alt="post">
                    <div class="tabcontent__descr">
                        Наш заклад виконує послуги доставки замовлень за містом Балаклія та Балаклійського району.
                        Ця послуга абсолютно безкоштовна, також Ви можете забрати замовлення самостійно.
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/hamburger.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Наш заклад працює з 11:00 до 23:00. Замовлення на доставку приймаються з 10:00 до 22:00. 
                        Розраховуйте на те, що потрібен час, щоб приготувати вашу страву. З повагою, кухарі!
                    </div>
                </div>
                <div class="tabheader">
                    <h3>Дізнайтеся більше!</h3>
                    <div class="tabheader__items">
                        <div class="tabheader__item tabheader__item_active">Про нас</div>
                        <div class="tabheader__item">Акції</div>
                        <div class="tabheader__item">Доставка</div>
                        <div class="tabheader__item">Інформація</div>
                    </div>
                </div>
            </div>
            <div class="preview__life">Насолуджуйся життям з нами!</div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="offer">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="offer__text">
                <h2 class="title">Що ми можемо запропонувати?</h2>
                <div class="offer__descr">
                    Наша основна ідея - це швидке та смачне харчування. Воно смачне, а деякі страви навіть корисні.
                    Ми не просто доставка, ми сервіс! Ми взяли на себе розрахунки калорій, Ви можете самостійно дізнатися
                    яка норма калорій саме для вас і вже обирати страви за необхідність. Вам залишається лише замовити
                    страви, які довподопи та насолоджуватися смаком. А все інше ми зробимо за Вас!
                    
                </div>
            </div>
            <div class="offer__action">
                <button data-modal class="btn btn_dark">Зворотній дзвiнок</button>
            </div>
        </div>
        <div class="container">
            <div class="offer__advantages">
                <h2>Швидко и смачно!</h2>
                <div class="offer__advantages-text">
                    Приготування вдома затрачає багато сил та часу, особливо після тяжкого робочогу дня або перед святом.
                    Ми доставимо їжу в будь-який час, як забажаєте.
                </div>
                <h2>Насолджуйся життям!</h2>
                <div class="offer__advantages-text">
                   
                </div>
            </div>
            <div class="offer__slider">
                <div class="offer__slider-counter">
                    <div class="offer__slider-prev">
                        <img src="icons/left.svg" alt="prev">
                    </div>
                    <span id="current">01</span>
                    /
                    <span id="total">04</span>
                    <div class="offer__slider-next">
                        <img src="icons/right.svg" alt="next">
                    </div>
                </div>
                <div class="offer__slider-wrapper">
                    <div class="offer__slider-inner">
                        <div class="offer__slide">
                            <img src="img/slider/pepper.jpg" alt="pepper">
                        </div>
                        <div class="offer__slide">
                            <img src="img/slider/food-12.jpg" alt="food">
                        </div>
                        <div class="offer__slide">
                            <img src="img/slider/olive-oil.jpg" alt="oil">
                        </div>
                        <div class="offer__slide">
                            <img src="img/slider/paprika.jpg" alt="paprika">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="calculating">
        <div class="container">
            <h2 class="title">Розрахуємо вашу калорійність?
            </h2>
            <div class="calculating__field">
                <div class="calculating__subtitle">
                    Ваша стать
                </div>
                <div class="calculating__choose" id="gender">
                    <div  id="female" class="calculating__choose-item calculating__choose-item_active">Дівчина</div>
                    <div id="male" class="calculating__choose-item">Хлопець</div>
                </div>

                <div class="calculating__subtitle">
                    Ваші параметри
                </div>
                <div class="calculating__choose calculating__choose_medium">
                    <input type="text" id="height" placeholder="Ваш зріст" class="calculating__choose-item">
                    <input type="text" id="weight" placeholder="Ваша вага" class="calculating__choose-item">
                    <input type="text" id="age" placeholder="Скільки вам років?" class="calculating__choose-item">
                </div>

                <div class="calculating__subtitle">
                    Оберіть фізичну активність
                </div>
                <div class="calculating__choose calculating__choose_big">
                    <div data-ratio="1.2" id="low" class="calculating__choose-item">Низька активність </div>
                    <div data-ratio="1.375" id="small" class="calculating__choose-item calculating__choose-item_active">Невисока
                        активність</div>
                    <div data-ratio="1.55" id="medium" class="calculating__choose-item">Середня активність</div>
                    <div data-ratio="1.725" id="high" class="calculating__choose-item">Висока активність</div>
                </div>

                <div class="calculating__divider"></div>

                <div class="calculating__total">
                    <div class="calculating__subtitle">
                        Ваша суточна норма калорій:
                    </div>
                    <div class="calculating__result">
                        <span>2700 </span> ккал
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="divider"></div>

    <div class="menu">
        <h2 class="title">ХІТ продаж!!!</h2>
        
        <div class="menu__field">
            <div class="container">
            <?php if (!empty($menulist)): ?>
                <?php foreach ($menulist as $product): ?>
            <div class="menu__item">
                    <img src="img/tabs/<?=$product['img_path'];?>" alt="vegy">
                    <h3 class="menu__item-subtitle"><?=$product['name'];?></h3>
                    <div class="menu__item-descr"><?=$product['description'];?></div>
                    <div class="menu__item-divider"></div>
                    <div class="menu__item-price">
                        <div class="menu__item-cost">Цена:</div>
                        <div class="menu__item-total"><span><?=$product['price'];?></span> грн</div>
                    </div>
                    <div class="containerloxa">
                    <button class="btnm" data-id="<?= $product['price'] ?>">Добавить в корзину</button>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            
            </div>
        </div>
    </div>

    <div class="order">
        <div class="container">
            <div class="title">Є запитання? Ми передзвонимо!</div>
            <form action="#" class="order__form">
                <input required placeholder="Ваше ім'я" name="name" type="text" class="order__input">
                <input required placeholder="Ваш номер телефону" name="phone" type="phone" class="order__input">
                <img src="icons/right.svg" alt="right">
                <button id="btn-request" class="btn btn_dark btn_min">Передзвоніть мені</button>
            </form>
        </div>
    </div>

    <div class="divider"></div>

    <div class="promotion">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="promotion__text">
                <div class="title">ТИ знайдеш нас тут!</div>
                <div class="promotion__descr">
                   
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.817428803142!2d36.2267020238276!3d50.014777091470286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243c457187%3A0xa7ceb6be9eeb6acd!2z0J_QsNC80Y_RgtC90LjQuiDRgdGC0YPQtNC10L3RgtGDLdC_0YDQvtCz0YDQsNC80LzQuNGB0YLRgw!5e0!3m2!1sru!2sua!4v1652435409458!5m2!1sru!2sua" margin-left="5" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                    <!-- </div>  -->
            </div>
            <div class="promotion__timer">
                <div class="title">Новий заклад через:</div>
                <div class="timer">
                    <div class="timer__block">
                        <span id="days">90</span>
                        днів
                    </div>
                    <div class="timer__block">
                        <span id="hours">20</span>
                        годин
                    </div>
                    <div class="timer__block">
                        <span id="minutes">56</span>
                        хвилин
                    </div>
                    <div class="timer__block">
                        <span id="seconds">20</span>
                        секунд
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="social">
                <div class="subtitle">Ми в соціальних мережах:</div>
                <a href="https://www.instagram.com/oldieks/" class="link" Target="_blank"> instagram</a>
                <a href="#" class="link">facebook</a>
            </div>
            <div class="pepper">
                <img src="icons/veg.svg" alt="pepper">
            </div>
            <div class="call">
                <div class="subtitle">Контакти</div>
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
                    <div class="modal__title">Ми передзвонемо!</div>
                    <input required placeholder="Ваше ім'я" name="name" type="text" class="modal__input">
                    <input required placeholder="Ваш номер телефону" name="phone" type="phone" class="modal__input">
                    <button class="btn btn_dark btn_min">Пердзвоніть мені!</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/bundle.js"></script>
    

        
</body>

</html>