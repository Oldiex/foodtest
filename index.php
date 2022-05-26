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
        <a href="#" class="header__link">Меню </a>
        <a href="#" class="header__link">Корзина</a>

    </div>
        </div>
        <div class="header__right-block">
            <button data-modal class="btn btn_white">Зворотний дзвiнок</button>
        </div>
        
    </header>
    
    </div>
    <nav id="menuVertical">
		<ul>
			<li><a href="pizza.php"><div class="imgn"><img src="img/aside-icons/pizza.png"></div><p class ="loll">Пицца</p></a></li>
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
                        Наше специальное “Постное меню” - это тщательный подбор ингредиентов: полное отсутствие
                        продуктов животного происхождения. Полная гармония с собой и природой в каждом элементе! Все
                        будет Ом!
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/hamburger.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Меню "Сбалансированное" - это соответствие вашего рациона всем научным рекомендациям. Мы
                        тщательно просчитываем вашу потребность в к/б/ж/у и создаем лучшие блюда для вас.
                    </div>
                </div>
                <div class="tabheader">
                    <h3>Дізнайтеся більше!</h3>
                    <div class="tabheader__items">
                        <div class="tabheader__item tabheader__item_active">Про нас</div>
                        <div class="tabheader__item">Акції</div>
                        <div class="tabheader__item">Постное</div>
                        <div class="tabheader__item">Сбалансированное</div>
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
                <h2 class="title">Что мы можем вам предложить?</h2>
                <div class="offer__descr">
                    Наша основная идея - это правильное питание. Оно может быть простым и вкусным. Мы не просто
                    доставка, мы сервис! Мы взяли на себя все расчеты БЖУ, калорийности, объемов порций и прочие важные,
                    но скучные аспекты. Вам остается только полезная, сытная и правильная еда, которую мы привозим прямо
                    под дверь.
                </div>
            </div>
            <div class="offer__action">
                <button data-modal class="btn btn_dark">Связаться с нами</button>
            </div>
        </div>
        <div class="container">
            <div class="offer__advantages">
                <h2>Быстро и полезно</h2>
                <div class="offer__advantages-text">
                    Готовка дома занимает много сил, времени и нервов. Мы привозим еду сразу на целый день, и ты можешь
                    действовать так, как тебе удобно, не подстраиваясь ни под кого и будучи уверенным в качестве
                    продукта!
                </div>
                <h2>Правильный рацион</h2>
                <div class="offer__advantages-text">
                    Мы разработали специальное меню, где учтены все нюансы правильного питания, от баланса БЖУ до их
                    приготовления и дробления рациона.
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
            <h2 class="title">Рассчитаем вашу потребность в калориях?
            </h2>
            <div class="calculating__field">
                <div class="calculating__subtitle">
                    Ваш пол
                </div>
                <div class="calculating__choose" id="gender">
                    <div  id="female" class="calculating__choose-item calculating__choose-item_active">Женщина</div>
                    <div id="male" class="calculating__choose-item">Мужчина</div>
                </div>

                <div class="calculating__subtitle">
                    Ваша конституция
                </div>
                <div class="calculating__choose calculating__choose_medium">
                    <input type="text" id="height" placeholder="Введите рост" class="calculating__choose-item">
                    <input type="text" id="weight" placeholder="Введите вес" class="calculating__choose-item">
                    <input type="text" id="age" placeholder="Введите возраст" class="calculating__choose-item">
                </div>

                <div class="calculating__subtitle">
                    Выберите вашу физическая активность
                </div>
                <div class="calculating__choose calculating__choose_big">
                    <div data-ratio="1.2" id="low" class="calculating__choose-item">Низкая активность </div>
                    <div data-ratio="1.375" id="small" class="calculating__choose-item calculating__choose-item_active">Невысокая
                        активность</div>
                    <div data-ratio="1.55" id="medium" class="calculating__choose-item">Умеренная активность</div>
                    <div data-ratio="1.725" id="high" class="calculating__choose-item">Высокая активность</div>
                </div>

                <div class="calculating__divider"></div>

                <div class="calculating__total">
                    <div class="calculating__subtitle">
                        Ваша суточная норма калорий:
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
        <h2 class="title">Наше меню на день</h2>
        
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
            <div class="title">Заказывай пробный день прямо сейчас!</div>
            <form action="#" class="order__form">
                <input required placeholder="Ваше имя" name="name" type="text" class="order__input">
                <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="order__input">
                <img src="icons/right.svg" alt="right">
                <button id="btn-request" class="btn btn_dark btn_min">Перезвонить мне</button>
            </form>
        </div>
    </div>

    <div class="divider"></div>

    <div class="promotion">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="promotion__text">
                <div class="title">Мы здесь!</div>
                <div class="promotion__descr">
                   
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.817428803142!2d36.2267020238276!3d50.014777091470286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243c457187%3A0xa7ceb6be9eeb6acd!2z0J_QsNC80Y_RgtC90LjQuiDRgdGC0YPQtNC10L3RgtGDLdC_0YDQvtCz0YDQsNC80LzQuNGB0YLRgw!5e0!3m2!1sru!2sua!4v1652435409458!5m2!1sru!2sua" margin-left="5" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                    <!-- </div>  -->
            </div>
            <div class="promotion__timer">
                <div class="title">Осталось до конца акции:</div>
                <div class="timer">
                    <div class="timer__block">
                        <span id="days">90</span>
                        дней
                    </div>
                    <div class="timer__block">
                        <span id="hours">20</span>
                        часов
                    </div>
                    <div class="timer__block">
                        <span id="minutes">56</span>
                        минут
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
    

        
</body>

</html>