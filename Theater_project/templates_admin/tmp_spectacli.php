<div class="tite">Спектакли</div>

<?php

include '../php/database.php';
$actors = get_actors();

$spectale = get_spectacle();

foreach ($spectale as $spectale) : ?>

    <div>
        <ul class="tmp_list">
            <li>
                <p>Название: </p><?php echo $spectale['nazvanie'] ?>
            </li>
            <li>
                <p>Дата: </p><?php echo $spectale['date'] ?>
            </li>
            <li>
                <p>Время: </p><?php echo $spectale['time'] ?>
            </li>
            <li>
                <p>Длительность: </p><?php echo $spectale['dlitelnost'] ?>
            </li>
        </ul>
    </div>

<?php endforeach; ?>