<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-sait.css">
    <title>Document</title>
</head>
<body>
<!-- Шапка начало -->
<header class="header" >
    <nav class="container">

        <!-- Лого начало -->
        <a href="#" class="logo"><img src="img/Kino_Indonesia_logo.png" alt="" class="logo__img" style="height: 90px;"></a>
        <!-- Лого конец -->

        <!-- Бургер начало -->
        <div class="burger"><span></span></div>
        <!-- Бургер конец -->

        <!--Меню начало-->
        <ul class="header__list">
            <li class="header__item"><a href="uslugi.html" class="header__link">Фильмы</a></li>
            <li class="header__item"><a href="otrasli.html" class="header__link">Сеансы</a></li>
            <li class="header__item"><a href="keys.html" class="header__link">Кинотеатры</a></li>
        </ul>
        <!--Меню конец-->

         <!--Поиск начало-->
         <form action="" method="get" id="search">
            <input type="text" id="text-to-find" class="search__text" placeholder="Поиск"/>
            <a class="search__button" type="button" onclick="javascript: FindOnPage('text-to-find',true); return false;">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </form>
        <!--Поиск конец-->

    </nav>
</header>

<div class="container">
    <div class="film-block">
        <div class="cards">
            <div class="card">
                <h3>Дивергент</h3>
                <img src="img/divergent.png" alt="" style="margin-top:10px; width:150px">
                <p style="margin-top:10px;">Трис оказывается лишней в строго контролируемом мире будущего. Антиутопия с Шейлин Вудли и Кейт Уинслет</p>
            </div>
            <div class="card">
                <h3>Волк и лев</h3>
                <img src="img/volk.png" alt="" style="margin-top:10px; width:150px">
                <p style="margin-top:10px;">Хозяйка домика в лесу воспитывает маленьких хищников. Проникновенное семейное кино с завораживающими пейзажами</p>
            </div>
            <div class="card">
                <h3>Иллюзия обмана</h3>
                <img src="img/il.png" alt="" style="margin-top:10px; width:150px">
                <p style="margin-top:10px;">Банда иллюзионистов грабит счета коррупционеров. Триллер с криминальными фокусами и звездным составом</p>
            </div>
        </div>
    </div>
</div>
<!-- Шапка конец -->
</body>
</html>