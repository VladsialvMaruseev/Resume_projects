<div class="tite">Статьи</div>

<?php

include '../php/database.php';
$articles = get_articles();

foreach ($articles as $article) : ?>

    <?php $fio = get_autors_by_id($article["id_autor"]); ?>

    <div>
        <ul class="tmp_list">
            <li>
                <p>Заголовок: </p><?php echo $article['title'] ?>
            </li>
            <li>
                <p>Содержание: </p><?php echo $article['text'] ?>
            </li>
            <li >
                <p>Автор: </p><?php echo $fio ?>
            </li>
            <li>
                <p>Дата публикации: </p><?php echo $article['date'] ?>
            </li>
        </ul>
    </div>

<?php endforeach; ?>