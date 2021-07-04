<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/normalyze.css">
    <link rel="stylesheet" href="../js/main.js">
    <link rel="stylesheet" href="../js/jQery.js">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Shanoto - Регистрация</title>
</head>

<body>

    <?php
    require '../templates/tmp_slide_nav.php';
    require '../templates/tmp_header.php';
    ?>

    <div class="content_form">
        <div id="k_auth_1">
            <div class="contecnt_form">
                <form action="../php/handler.php" method="post">
                    <div class="form_title">
                        Вход
                    </div>
                    <div class="form_list">
                        <div class="form_list_item">
                            <li><label class="input_name" for="login">ЛОГИН / ПОЧТА</label></li><input class="input_style" required name="login" type="text">
                        </div>
                        <div class="form_list_item">
                            <li><label class="input_name" for="name">ПАРОЛЬ</label></li><input class="input_style" required name="psw" type="password">
                        </div>
                    </div>
                    <div class="under_block">
                        <input type="checkbox" class="checkbox_style">
                        <div id="k_auth_2">Запомнить меня</div>
                        <div class="checkbox_text_right"> <a href="reg.php">Регистрация</a></div>
                    </div>
                    <button class="auth_btn" type="submit">Войти</button>
                    <input type="hidden" value="auth" name="form">
                </form>
            </div>
        </div>
    </div>

    <?php
    require '../templates/tmp_footer.php';
    ?>

</body>

</html>