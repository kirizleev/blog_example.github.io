<?php
    if($_COOKIE['auth'] == 'true'){
        header('Location: http://localhost/homepage.php');
    }

    function formastr($str) {
        $str = trim($str);
        $str = stripcslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }

    $mysqli = new mysqli('localhost', 'root', '', 'blog');

    $error_auth = '';
    $error_reg = '';

    $type = $_GET['type'];

    if($type == 'auth') {
        $email = formastr($_GET['email']);
        $password = formastr($_GET['password']);

        $result = $mysqli->query("SELECT * FROM  'users' WHERE 'email' = '".$email."'");

        $row = $result->fetch_assoc();

        if ($row['password'] == $password) {
            SetCookie("auth", "true");
            SetCookie("userid", $row['id']);
            SetCookie("usermail", $row['email']);
            SetCookie("username", $row['name']);
            header('Location: http://my.io/homepage.php');
        }else{
            $error_auth = 'Не правильная почта или пароль!';
        }
    }elseif($type == 'reg'){
        $login = formastr($_GET['login']);
        $name = formastr($_GET['name']);
        $email = formastr($_GET['email']);
        $surname = formastr($_GET['surname']);
        $password = formastr($_GET['password']);
        $confirmpass = formastr($_GET['confirmpass']);
        $mobile = formastr($_GET['mobile']);
        $mobile2 = formastr($_GET['mobile2']);
        if($password == $confirmpass){
            $sql = "INSERT INTO user (name, surname, email, mobile)
            VALUES('".$name."','".$surname."','".$email."','".$mobile."')";
            $result = $mysqli->query($sql);
            header('Location: http://my.io/homepage.php');
        }else{
            $error_password = 'Пароли не совпадают!';
        }
    }
?>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./content/css/reg_auth.css">
    <title>Авторизация и регистрация</title>
</head>

<body>
    <? include 'header.php'; ?>
    <div class="main">
        <div class="left_col">
            <h3>Авторизация</h3>
            <form method="GET">
                <input type="hidden" value="auth" name="type">
                <input type="text" placeholder="    Логин(Почта)" name="login">
                <input type="text" placeholder="    Пароль" name="password">
                <input type="submit" id="auth_button">
            </form>
            <?php
                if($error_auth !=  null){
                    echo "<p>".$error_auth."</p>";
                }
            ?>

        </div>
        <div class="right_col">
            <h3>Регистрация</h3>
            <div>
                <form method="GET">
                    <input type="hidden" value="reg" name="type">
                    <input type="text" placeholder="    Логин" name="login">
                    <input type="text" placeholder="    Имя" name="name">
                    <input type="email" placeholder="    Почта" name="email">
                    <input type="text" placeholder="    Фамилия" name="surname">
                    <input type="password" placeholder="    Пароль" name="password">
                    <input type="password" placeholder="    Подтвердите пароль" name="confirmpass">
                    <input type="tel" placeholder="    Номер телефона" name="mobile">
                    <input type="tel" placeholder="    Второй номер(необязательно)" name="mobile2">
                    <input type="submit" id="reg_button">
                </form>
                <?php
                if($error_password !=  null){
                    echo "<p>".$error_password."</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <p>Все права защищены</p>
        </div>
    </footer>
</body>

</html>