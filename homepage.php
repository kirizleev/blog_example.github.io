<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="content/css/homepage.css">
    <title>Блог</title>
</head>

<body>
    <? include 'header.php'; ?>
    <div class="main">
        <div class="left_col">
            <div class="article">
                <div class="article_info">
                    <h4 class="article_number">Статья 1</h4>
                    <h4 class="article_date">1 февраля 2019</h4>
                </div>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia numquam hic veritatis aspernatur.
                    Accusamus delectus asperiores alias eligendi. Corporis iste iusto ad saepe earum provident veritatis
                    esse
                    animi non quasi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nisi, architecto exercitationem vel
                    sed voluptatibus atque harum doloribus accusamus quos odio laborum culpa ut, ratione, ipsam porro
                    sequi id nostrum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, explicabo recusandae enim,
                    dolorum hic corporis inventore odio pariatur mollitia consectetur debitis ut, quos cupiditate
                    voluptatum. Perspiciatis vero pariatur molestias sed.
                </p>
                <div class="article_info">
                    <div style="display: flex;">
                        <h4 style="margin-right: 24px;">Просмотры: 300</h4>
                        <h4>Лайки: 100</h4>
                    </div>
                    <form action="article.html">
                        <button id="read_article_button">Читать</button>
                    </form>
                </div>
            </div>
            <a href="https://www.apple.com/ru/iphone-11/" target="_blank">
                <img src="./content/img/Картинка.png" alt="Реклама IPhone 11" id="homepage_adv" intrinsicsize>
            </a>
            <div class="article">
                <div class="article_info">
                    <h4 class="article_number">Статья 1</h4>
                    <h4 class="article_date">1 февраля 2019</h4>
                </div>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia numquam hic veritatis aspernatur.
                    Accusamus delectus asperiores alias eligendi. Corporis iste iusto ad saepe earum provident veritatis
                    esse
                    animi non quasi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nisi, architecto exercitationem vel
                    sed voluptatibus atque harum doloribus accusamus quos odio laborum culpa ut, ratione, ipsam porro
                    sequi id nostrum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, explicabo recusandae enim,
                    dolorum hic corporis inventore odio pariatur mollitia consectetur debitis ut, quos cupiditate
                    voluptatum. Perspiciatis vero pariatur molestias sed.
                </p>
                <div class="article_info">
                    <div style="display: flex;">
                        <h4 style="margin-right: 24px;">Просмотры: 300</h4>
                        <h4>Лайки: 100</h4>
                    </div>
                    <form action="article.html">
                        <button id="read_article_button">Читать</button>
                    </form>
                </div>
            </div>
        </div>
        <nav class="right_col">
            <h3 class="article_nav">Разделы</h3>
            <ul class="article_nav">
                <li>
                    <a href="#">Статьи</a>
                    <ul>
                        <li>
                            <a href="article.html">Статья 1</a>
                        </li>
                        <li>
                            <a href="#">Статья 2</a>
                        </li>
                        <li>
                            <a href="#">Статья 3</a>
                        </li>
                        <li>
                            <a href="#">Статья 4</a>
                        </li>
                        <li>
                            <a href="#">Статья 5</a>
                            <ul>
                                <li>
                                    <a href="#">Статья 5.1</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Новость</a>
                    <ul>
                        <li>
                            <a href="#">Новость 1</a>
                        </li>
                        <li>
                            <a href="#">Новость 2</a>
                        </li>
                        <li>
                            <a href="#">Новость 3</a>
                            <ul>
                                <li>
                                    <a href="#">Новость 3.1</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <footer>
        <div>
            <p>2019 Все права защищены</p>
            <a href="#">Разработчик</a>
        </div>
    </footer>
</body>

</html>