<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Шрифт -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <title><?= "Страница - ".mb_strtolower($title) ?></title>
</head>
<body>

                                        <!-- /.preloader -->
<div id="preloader"></div>
    

    <div class="wrapper">
        <div class="header">
            <!-- /.Меню слева-->
            <nav class="nav_menu">
                <!-- /.Логотип -->
                <div class="logo_main">
                    <a href="#" class="logo"></a>
                </div>
                <!-- /.меню -->
                <ul class='header_menu_left'>
                    <li><a class="bottom_line" href="#">Женщинам</a></li>
                    <li><a class="bottom_line" href="#">Мужчинам</a></li>
                    <li><a class="bottom_line" href="#">Детям</a></li>
                    <li><a class="bottom_line" href="#">Новинки</a></li>
                    <li><a class="bottom_line" href="#">О нас</a></li>
                </ul>
            </nav>  
            <!-- /.Навигация справа: Войти, Корзина -->
            <nav class="nav_menu_right">
                <!-- /.личный кабинет(войти) + корзина -->
                <ul class='header_dots_right'>
                    <li class='enter user' onclick="popUp('.popup-start', this);">Войти</li>
                    <a href="basket.php"><li class='basket'>Корзина(0) 0 руб.</li></a>
                   
                </ul>
            </nav>
        </div>
        
            <!-- /.Серая линия -->
            <div class="line"></div> 
                            <!-- Всплывающее окно     -->
            <div class="popup-start">
                <div class="pop-up">
                    <div class="pop-up-center"> 
                        <div class="popup-center-cross"></div>
                        <h2 class='show-text'>Вход</h2>
                        <div class="form_line"></div>
                        <form  method='GET' action='form.php'>
                            <div class="auth_social">
                                <div class='auth_social_title'>С помощью аккаунта OnlineStore</div>
                                <div class='login_form_register'>создать аккуант</div>
                            </div>
                            <input type='text' name='login' minlength="5" maxlength="10" placeholder="Вам логин" required></br>
                            <input type='password' name='pass' minlength="5" maxlength="10" placeholder="пароль" required></br>
                            <input type='submit' value='войти'> 
                        </form>
                    </div>
                </div>
            </div>   