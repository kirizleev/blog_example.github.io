<header>
    <div class="width1080">
        <a href="homepage.php">
                <h3>Блог пользователя</h3>
        </a>
        <nav>
                <a href="homepage.php">Главная</a>
                <a href="article.html">Статья</a>
                <a href="#">Новости</a>
                <a href="#">Обо мне</a>
        </nav>
        <nav class="mobile_menu_opened" id="mobile_menu">
                <a href="homepage.php">Главная</a>
                <a href="article.html">Статьи</a>
                <a href="#">Новости</a>
                <a href="#">Обо мне</a>
                <a href="reg_auth.php">Авторизация и Регистрация</a>
                <a href="#" onclick="document.getElementById('mobile_menu').style.display = 'none'">Закрыть</a>
        </nav>
        <div class="mobile_menu_button" id="mobile_menu_button" onclick="document.getElementById('mobile_menu').style.display = 'block'"></div>
    </div>
</header>
<div class="find_authorize">
    <div class="width1080">
        <form>
            <input type="text" placeholder="     Введите текст...">
            <input type="submit" value="Искать" id="find_button">
        </form>
        <div>
            <?if($_COOKIE['username'] != null) {?>
				<p class="username">
					<?
					echo $_COOKIE['username']."(".$_COOKIE['useremail'].")";
					?>
				</p>
				<div><a href="/logout.php">Выйти</a></div>
            <?} else {?>
                <a href="reg_auth.php">Авторизация и регистрация</a>
            <?}?>
        </div>
    </div>
</div>