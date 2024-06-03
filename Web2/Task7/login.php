<?php
$csrf_token = $_SESSION['csrf_token'];
$authorization_errors = [];
if (isset($_GET['error_authorization_flag'])) {
    $error_authorization_flag = true;
    $authorization_errors = unserialize($_COOKIE['authorization_errors']);
}
?>

<!DOCTYPE html>
<html lang="en">
<audio id="background-music" autoplay loop>
    <source src="https://github.com/kabakov52/kabakov52.github.io/blob/main/Web2/elevator_music_-_Muzyka_iz_lifta_Elevator_feat_Slim_Chance_64610955.mp3?raw=true" type="audio/mpeg">
    Ваш браузер не поддерживает тег audio.
</audio>
<head>
    <meta charset="UTF-8">
    <script src="../jquery.js" defer></script>
    <script src="scripts.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="../logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Задание 7</title>
</head>

<body>
<<header>
    <nav class="header-logo">
        <img class="header-logo" src="https://github.com/kabakov52/kabakov52.github.io/blob/main/Web2/logo.png?raw=true" alt="Logo">
    </nav>
    <h1>Задание 7</h1>
</header>

<main>
    <div class="tasks">
        <h1>Авторизация</h1>
        <?php if (isset($error_authorization_flag)): ?>
            <div class="div-result">
                <?php foreach ($authorization_errors as $key => $val): ?>
                    <div class="error-color label-center">
                        <?php echo $val; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form name="login-form" id="login-form" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <div class="div-input">
                <label id="for-login" class="black label-center" for="login">Логин</label>
                <input name="login" class="size-input" id="login" type="text">
            </div>
            <div class="div-input">
                <label id="for-password" class="black label-center" for="password">Пароль</label>
                <input name="password" class="size-input" id="password" type="password">
            </div>
            <div class="div-input">
                <button name="authorization" value="True">Войти</button>
            </div>
        </form>
        <h2>Регистрация</h2>
        <form name="registration-form" id="registration-form" method="get">
            <div class="div-input">
                <button name="registration" value="True">Зарегистрироваться</button>
            </div>
        </form>
    </div>
</main>

<footer>
    <h3 class=" text_in_footer">Кабаков Ярослав</h3>
</footer>
</body>

</html>