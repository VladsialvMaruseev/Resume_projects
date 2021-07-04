<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/normalyze.css">
    <link rel="stylesheet" href="../js/main.js">
    <link rel="stylesheet" href="../js/jQery.js">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Shanoto - Личный кабинет</title>
</head>

<body>

    <?php
    require '../templates/tmp_slide_nav.php';
    require '../templates/tmp_header_profile.php';
    ?>

    <div class="profile_info">
        <div class="about__theater-tittle">ПРОДАЖА БИЛЕТОВ <span class="golden-color">ОНЛАЙН</span></div>
        <div class="profile_selector">
            <a href="profile.php" class="selector_active">СПЕКТАКЛИ</a>
            <a href="#">ИСТОРИЯ ЗАКАЗОВ</a>
            <a href="profile_info.php">ПРОФИЛЬ</a>
        </div>
    </div>

    <?php
    require '../templates/tmp_spectacle_profile.php';
    require '../templates/tmp_footer.php';
    ?>

</body>

</html>