<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/normalyze.css">
    <link rel="stylesheet" href="../js/main.js">
    <link rel="stylesheet" href="../js/jQery.js">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Shanoto - Актеры</title>
</head>

<body>

    <?php
    require '../templates/tmp_slide_nav.php';
    require '../templates/tmp_header.php';
    ?>

    <div class="actors">
        <div class="about__theater-tittle"><span class="golden-color">НАШИ</span> АКТЕРЫ</div>
        <div class="actors_container">
            <?php require '../templates/tmp_actors.php'; ?>
        </div>
    </div>

    <?php
    require '../templates/tmp_footer.php';
    ?>

</body>

</html>