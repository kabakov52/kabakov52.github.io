<?php
$admin_login = $_SESSION['admin_login'];
$users = get_all_users();
$prog_langs_statistic = get_prog_langs_statistic();
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
    <link rel="shortcut icon" href="../logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <title>Задание 7</title>
</head>

<body>
<header>
    <nav class="header-logo">
        <img class="header-logo" src="https://github.com/kabakov52/kabakov52.github.io/blob/main/Web2/logo.png?raw=true" alt="Logo">
    </nav>
    <nav class="header-info">
        <h3 class="header-task">Админ-панель</h3>
    </nav>

</header>

<main>
    <div class="tasks">
        <h1>Список пользователей</h1>
        <div class="div-input">
            <form>
                Ваш логин:
                <?php echo $admin_login ?>
            </form>
        </div>
        <?php
        foreach ($users as $user) {
            $user_login = $user['login'];
            echo "<a href='?user={$user_login}'>{$user_login}</a>";
        }
        ?>
    </div>
    <div class="tasks">
        <h3>Статистика</h3>
        <?php
        foreach ($prog_langs_statistic as $prog_lang=>$user_count) {
            echo "{$prog_lang}: {$user_count}";
            echo "<br>";
        }
        ?>
    </div>
</main>

<footer>
    <h3 class=" text_in_footer">Кабаков Ярослав</h3>
</footer>
</body>

</html>