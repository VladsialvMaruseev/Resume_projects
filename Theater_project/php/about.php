<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/normalyze.css">
    <link rel="stylesheet" href="../js/main.js">
    <link rel="stylesheet" href="../js/jQery.js">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Shanoto - О театре</title>
</head>

<body>

    <?php
    require '../templates/tmp_slide_nav.php';
    require '../templates/tmp_header_about.php';
    ?>

    <div class="about_theater">
        <div class="about__theater-tittle">О <span class="golden-color">ТЕАТРЕ</span></div>
        <div class="about_theater_item">
            <div class="about_text_block">
                <h6>1770</h6>
                <p>Историческое здание дом № 23 украшает Тверской бульвар очень давно.
                    Самые ранние сведения об этом здании относятся ко времени императрицы
                    Екатерины Великой.В 1779 году тайный советник князь И. А. Вяземский
                    продал двор с домом в приходе церкви Иоанна Богослова бригадирше
                    А. С. Дмитриевой-Мамоновой за 3300 золотых рублей. В документе
                    особняк назван «каменными старыми палатами». Его протяженность
                    по фасаду была значительно короче, чем сейчас.</p>
            </div>
            <div class="about_img_block">
                <img src="../images/about01.jpg" alt="">
            </div>
        </div>
        <div class="about_theater_item">
            <div class="about_img_block">
                <img src="../images/about02.jpg" alt="">
            </div>
            <div class="about_text_block">
                <h6>1800–1890-Е</h6>
                <p>Дом в разное время многократно перестраивали и расширяли
                    по заказу владельцев: генерала-майора И. Ф. Дмитриева-Мамонова,
                    затем полковника П. А. Кологривова, позднее представителей
                    старинного рода Вырубовых<br><br>
                </p>
                <h6>1900-Е</h6>
                <p>Новый владелец дома, действительный статский советник Портнов,
                    стал сдавать первый этаж клубу циклистов
                    (так тогда называли велосипедистов) и музыкально-драматическому кружку,
                    а второй — частной гимназии.
                </p>
            </div>
        </div>
        <div class="about_theater_item">
            <div class="about_text_block">
                <h6>1800–1890-Е</h6>
                <p>Дом в разное время многократно перестраивали и расширяли
                    по заказу владельцев: генерала-майора И. Ф. Дмитриева-Мамонова,
                    затем полковника П. А. Кологривова, позднее представителей
                    старинного рода Вырубовых<br><br>
                </p>
                <h6>1900-Е</h6>
                <p>Новый владелец дома, действительный статский советник Портнов,
                    стал сдавать первый этаж клубу циклистов
                    (так тогда называли велосипедистов) и музыкально-драматическому кружку,
                    а второй — частной гимназии.
                </p>
            </div>
            <div class="about_img_block">
                <div class="flex_wrapper">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="../images/about03.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="../images/about02.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="../images/about01.jpg" style="width:100%">
                        </div>
                    </div>
                    <div class="slider-buttons">
                        <div class="prev" onclick="plusSlides(-1)"><img src="../images/arrow-left.svg" alt=""> Пред</div>
                        <div class="next" onclick="plusSlides(1)">След<img src="../images/arrow-right.svg" alt=""></div>
                    </div>
                </div>
                <script src="../js/main.js"></script>
                <script src="../js/jQery.js"></script>
            </div>
        </div>

        <?php
        require '../templates/tmp_footer.php';
        ?>

</body>

</html>