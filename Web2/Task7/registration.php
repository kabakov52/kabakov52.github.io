<?php
$csrf_token = $_SESSION['csrf_token'];
$all_names = ["fio", "telephone", "email", "bday", "sex", "langs", "biography"];
$errors = [];
if (isset($_GET['errors_flag'])) {
    $errors = unserialize($_COOKIE['errors']);
    $fields_data = unserialize($_COOKIE['incor_data']);
}

foreach ($all_names as $name) {
    if (!isset($fields_data[$name])) {
        if ($name == "langs") {
            $fields_data['langs'] = [];
        }
        else {
            $fields_data[$name] = "";
        }
    }
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
    <h1>Задание 7</h1>
</header>

<main>
    <div class="tasks" id="div_form">
        <form method="post" id="form">
            <h1 id="h1-form" class="black">Формочка</h1>
            <?php if (!empty($errors)): ?>
                <div class="div-result">
                    <?php foreach ($errors as $key => $val): ?>
                        <div class="error-color label-center">
                            <?php echo $val; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <?php echo_form($all_names, $fields_data, $errors); ?>
            <div class="label-center">
                <input id="contract" type="checkbox" name="contract" value="1">
                <label id="for-contract" class="black" for="contract">С контрактом ознакомлен</label>
            </div>

            <div class="div-input">
                <button name="registration_form" value="True">Отправить</button>
            </div>
        </form>
    </div>
</main>

<footer>
    <h3 class=" text_in_footer">Кабаков Ярослав</h3>
</footer>
</body>

</html>
