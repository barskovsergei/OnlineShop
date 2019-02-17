<?php
    $title = "Главная страница сайта";
    include("header.php");
?>
            <!-- /.Блок_2 -->
            <div class="main_block">
                <h1>Новые поступления весны</h1>
                <h2>Мы подготовили для Вас лучшие новинки сезона</h2>
                <button class="main_button_new">Посмотреть новинки</button>
            </div>
            <!-- /.Блок_3 - продукты -->
            <div class="main_products">
                <div class="main_product main_product1">
                    <div class="main_product_title">Джинсовые</br> куртки</div>
                    <div class="main_new_arrival">new arrival</div>
                   
                </div>
                <div class="main_product main_product2">
                    <div class="main_product_question"></div>
                    <div class="main_product_description">Каждый сезон мы</br> подготавливаем для Вас</br> исключительно лучшую</br> модную одежду. Следите за</br> нашими новинками</div>
                </div>
                <div class="main_product main_product3"></div>
                <div class="main_product main_product4">
                    <div class="main_arrow_icon"></div>
                    <div class="main_product_title">Элегантная</br> обувь</div>
                    <div class="main_new_arrival">ботинки, кросовки</div>
                </div>
                <div class="main_product main_product5">
                    <div class="main_product_title">Джинсы</div>
                    <div class="main_product_price">от 3200 руб.</div>
                </div>
                <div class="main_product main_product6">
                    <div class="main_product_question"></div>
                    <div class="main_product_description">Самые низкие цены в</br> Москве.</br> Нашли дешевле? Вернем</br> разницу.</div>
                </div>
                <div class="main_product main_product7">
                    <div class="main_product_title">Детская</br> одежда</div>
                    <div class="main_new_arrival">new arrival</div>
                </div>
                <div class="main_product main_product8"></div>
                <div class="main_product main_product9">
                    <div class="main_arrow_icon"></div>
                    <div class="main_product_title">Аксессуары</div>
                </div>
                <div class="main_product main_product10 overlay">
                    <div class="main_product_title">Спортивная</br> одежда</div>
                    <div class="main_product_price">от 590 руб.</div>
                </div>
            </div>
            <!-- /.Блок_4 - рассылка на почту -->
            <div class="main_distribution">
                <h2>Будь всегда в курсе выгодных предложений</h2>
                <p>подписывайся и следи за новинками и выгодными предложениями.</p>
                <!-- /.форма обратной связи - подписка на расылку -->
                <div class="form_subscription_content">
                    <form method="GET" action="#">
                        <input type="email" name="email" placeholder="e-mail">
                        <button type="submit">записаться</button>
                        <div class="error_message"></div>
                    </form>
                </div>
            </div>

<?php
    include("footer.php");
?>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

</body>
</html>