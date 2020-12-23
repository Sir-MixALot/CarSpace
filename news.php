<?php
session_start();

    if(!$_SESSION['user']){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="nav.css">
        <link rel="icon" href="img/icon.png">
        <title>Новости</title>

    </head>
    <body>
    <nav class="navbar">
        <script src="mainNav.js"></script>
        <a href="main.php" class="logo">АвтоКаталог</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="news.php" class="nav-links">Новости</a>
            </li>
            <li>
                <a href="about.php" class="nav-links">О программе</a>
            </li>
            <li>
                <a href="" onclick="msg();" class="nav-links">Справка</a>
                <script src="js/reference.js"></script>
            </li>
            <li>
                <a href="cart.php" class="nav-links" title="Ваша корзина">Корзина</a>
            </li>
            <li>
                <a href="profile.php" class="nav-links" title="Профиль"><?= $_SESSION['user']['login'] ?></a>
            </li>
            <li>
                <a href="vendor/logout.php" class="nav-links">Выйти</a>
            </li>
        </ul>
    </nav>
    <div class="content">
        <h1 id="warning">!Все новостные ссылки ведут на англоязычные новостные ресурсы!</h1>
    <div class="card">
        <p>Volkswagen расширил спектр концепций ID, включив в него новый внедорожник с электрическим двигателем мощностью 302 л.с., известный как Roomzz. Современный семиместный автомобиль, представленный на автосалоне в Шанхае, представляет собой предварительную версию серийной модели аналогичного размера и формы, которая, по словам Volkswagen, будет запущена в 2021 году.</p>
        <a href="https://www.autocar.co.uk/car-news/motor-shows-shanghai-auto-show/volkswagen-roomzz-concept-previews-2021-model-x-rival" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Если электромобиль должен где-то преуспеть, так это в сегменте супермини.

По общему признанию, небольшая платформа означает меньше места для аккумуляторов, и поэтому ассортимент следующих автомобилей никогда не будет соответствовать потенциалу более крупных альтернатив. Но маленькая батарея также означает более низкую запрашиваемую цену, и если мы говорим о городских малолитражках, которые совершают лишь редкие более длительные поездки, можно спорить, скольким владельцам потребуется больше, чем, скажем, 180 миль пробега.</p>
        <a href="https://www.autocar.co.uk/car-news/best-cars/top-10-best-small-electric-cars" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Именно в этом классе ультра-нишевого рынка спортивных автомобилей вы можете найти соотношение мощности к весу, соответствующее современному гиперкару, но доступное по очень низкой цене.</p>
        <a href="https://www.autocar.co.uk/car-news/best-cars/top-10-best-lightweights" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Сообщается, что Apple планирует выпустить свой первый легковой автомобиль в 2024 году, используя собственную технологию аккумуляторов, чтобы «радикально» снизить цену на батареи для электромобилей.</p>
        <a href="https://www.autocar.co.uk/car-news/technology-news/apple-car-targeting-2024-production-self-driving-ability" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Формула-1: 20 лучших моментов 2020 года</p>
        <a href="https://www.topgear.com/car-news/best-2020/formula-one-20-best-moments-2020#1" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Вот 20 лучших рестомодов 2020 года</p>
        <a href="https://www.topgear.com/car-news/best-2020/here-are-20-best-restomods-2020#1" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Девять лучших концептов суперкаров 1970-х годов</p>
        <a href="https://www.topgear.com/car-news/best-2020/nine-best-supercar-concepts-1970s#1" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Sabre 824-сильный - самый мощный негибридный McLaren
Ограниченный выпуск 15 автомобилями, Sabre был разработан McLaren Special Operations (MSO) и, как утверждается, развивает скорость до 218 миль в час.</p>
        <a href="https://www.caranddriver.com/news/a35047485/mclaren-sabre-specs-revealed/" target="_blank">Подробнее</a>
    </div>
    <div class="card">
        <p>Volvo обещает выпустить второй электромобиль в марте 2021 года
Следующий электромобиль шведского автопроизводителя будет более обтекаемым, чем XC40 Recharge, но на той же платформе.</p>
        <a href="https://www.caranddriver.com/news/a35047078/volvo-ev-spring-2021/" target="_blank">Подробнее</a>
    </div>
    </body>
</html>