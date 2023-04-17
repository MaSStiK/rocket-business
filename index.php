<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Многопрофильная клиника</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container">
            <div class="header__group">
                <div class="header__burger show-on-phone">
                    <img src="./assets/images/burger.svg" alt="open">
                </div>
                <div class="header__close">
                    <img src="./assets/images/cross.svg" alt="close">
                </div>
                <div class="header__logo">
                    <img src="./assets/images/LOGO.png" alt="logotype">
                </div>
                <div class="header__location">
                    <div class="header__location-img">
                        <img src="./assets/images/position.svg" alt="position">
                    </div>
                    <div class="header__location-position">
                        <p class="header__location-city">Ростов-на-Дону</p>
                        <p class="header__location-street">ул. Ленина, 2Б</p>
                    </div>
                </div>
            </div>
            <div class="header__group">
                <div class="header__contact-img">
                    <img src="./assets/images/whatsapp-small.svg" alt="whatsapp">
                </div>
                <div class="header__contact-block">
                    <p class="header__contact-number">+7(863) 000 00 00</p>
                    <p class="header__contact-city">Ростов-на-Дону</p>
                </div>
                <button class="button_green header__contact-button button-signup">Записаться на прием</button>
            </div>
        </div>
    </header>

    <nav class="hide-on-phone">
        <div class="container">
            <ul>
                <li><a href="#">О клинике</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Специалисты</a></li>
                <li><a href="#">Цены</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <button class="button_white nav__button-signup button-signup">Записаться на прием</button>
        </div>
    </nav>

    <section class="info">
        <div class="container">
            <div class="info__img_phone"></div>
            <div class="info__block">
                <h1 class="info__title">Многопрофильная клиника для детей<br> и взрослых</h1>
                <p class="info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="info__img">
                <img src="./assets/images/image.png" alt="image">
            </div>
        </div>
    </section>

    <section class="check-up">
        <!-- Я не знал как отрендерить чекапы, поэтому сделал это так и добавил функцию переключения через js -->
        <?php
            require_once("scripts/renderCheck-ups.php")
        ?>
        <div class="check-up__control">
            <div class="check-up__control-previous">
                <img src="./assets/images/arrow-left.svg" alt="previous">
            </div>
            <div class="check-up__control-number">
                1<span>/4</span>
            </div>
            <div class="check-up__control-next">
                <img src="./assets/images/arrow-right.svg" alt="next">
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer__logo">
                <img src="./assets/images/LOGO-inverted.png" alt="logotype">
            </div>
            <ul>
                <li><a href="#">О клинике</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Специалисты</a></li>
                <li><a href="#">Цены</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <div class="footer__contacts">
                <a href="#" class="footer__contacts-link">
                    <img src="./assets/images/instagram.svg" alt="instagram">
                </a>
                <a href="#" class="footer__contacts-link">
                    <img src="./assets/images/whatsapp.svg" alt="whatsapp">
                </a>
                <a href="#" class="footer__contacts-link">
                    <img src="./assets/images/telegram.svg" alt="telegram">
                </a>
                
            </div>
        </div>
    </footer>

    <div class="modal__wrapper hide-block">
        <!-- Не нашел хостинг на котором можно было бы отправить письмо через php mail -->
        <form class="modal" action="https://formsubmit.co/matvey.ovchinnikov.2014@mail.ru" method="POST">
            <h1 class="modal__title">Запись на прием</h1>
            <input type="text" name="name" class="modal__input" id="form_name" maxlength="200" placeholder="ФИО" required>
            <input type="phone" name="phone" class="modal__input" id="form_phone" placeholder="Телефон" required>
            <input type="email" name="email" class="modal__input" id="form_email" placeholder="Почта" required>
            <textarea name="message" class="modal__textarea" id="form_message" maxlength="500" placeholder="Сообщение"></textarea>
            <input type="hidden" name="_subject" value="Новая запись">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="https://rocket-business-test.000webhostapp.com">
            <button type="submit" class="button_green modal__button-signup">Записаться</button>
            <button type="reset" class="button_alternative modal__button-cancel">Отмена</button>
        </form>
    </div>

    <script src="scripts/check-ups.js"></script>
    <script src="scripts/menu.js"></script>
    <script src="scripts/modal.js"></script>
    <script src="scripts/phoneMask.js"></script>
</body>
</html>
