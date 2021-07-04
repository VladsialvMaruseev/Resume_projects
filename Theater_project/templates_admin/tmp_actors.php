<div class="tite">Актеры</div>

<?php

include '../php/database.php';
$actors = get_actors();

foreach ($actors as $actor) : ?>

<?php $pol = get_pol_by_id($actor["id_pol"]); ?>
<?php $img = get_imgs_by_id($actor["id_img"]); ?>
<?php $doljnost = get_doljnost_by_id($actor["id_doljnosti"]); ?>
<?php $zvanie = get_zvanie_by_id($actor["id_zvania"]); ?>

    <div class="tmp_admin">
        <ul class="tmp_list">
            <li>
                <p>Пол: </p><?php echo $pol ?>
            </li>
            <li>
                <p>Фотография: </p><img src="<?php echo $img ?>" alt="">
            </li>
            <li>
                <p>Должность: </p><?php echo $doljnost ?>
            </li>
            <li>
                <p>ФИО: </p><?php echo $actor['fio'] ?>
            </li>
            <li>
                <p>Телефон: </p><?php echo $actor['telephone'] ?>
            </li>
            <li>
                <p>Награды: </p><?php echo $zvanie ?>
            </li>
        </ul>
    </div>

<?php endforeach; ?>