<?php
include '../php/database.php';
$spectacles = get_spectacle();

foreach ($spectacles as $spectacle) : ?>

    <div class="afisha_item">
        <hr class="afisha_hr">
        <div class="spectacle_date">
            <?php echo date("d.m", strtotime($spectacle["date"])); ?>
        </div>
        <div class="spectacle_info">
            <div class="spectacle_name">
                <?php echo $spectacle["nazvanie"] ?>
            </div>
            <div class="spectacle_hall">
                ИСТОРИЧЕСКАЯ СЦЕНА
            </div>
            <div class="spectacle_time">
                <?php echo date("H:i", strtotime($spectacle["time"])) ?>
            </div>
            <a href="../profile/auth.php">
                <div class="btn">
                    КУПИТЬ БИЛЕТ
                </div>
            </a>
        </div>
        <hr class="afisha_hr">
    </div>

<?php endforeach; ?>