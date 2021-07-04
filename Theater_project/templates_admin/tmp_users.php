<div class="tite">Пользователи</div>

<?php

include '../php/database.php';
$users = get_users();

foreach ($users as $user) : ?>


    <div>
        <ul class="tmp_list">
            <li >
                <p>Группа: </p><?php echo $user['id_group'] ?>
            </li>
            <li >
                <p>Логин: </p><?php echo $user['user_login'] ?>
            </li>
            <li>
                <p>Почта: </p><?php echo $user['user_email'] ?>
            </li>
            <li>
                <p>Имя: </p><?php echo $user['user_name'] ?>
            </li>
            <li>
                <p>Дата регистрации: </p><?php echo $user['registration_date'] ?>
            </li>
        </ul>
    </div>

<?php endforeach; ?>