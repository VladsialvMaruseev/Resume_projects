<?php
include '../php/database.php';
$articles = get_articles();

foreach ($articles as $article) : ?>

    <?php $fio = get_autors_by_id($article["id_autor"]); ?>

    <div class="article_container">
        <div class="articles">
            <div class="article">
                <div class="article_image">
                    <img src="<?php echo $article["img"] ?>">
                </div>
                <div class="article_info">
                    <div class="article_title">
                        <h2><?php echo $article["title"] ?></h2>
                    </div>
                    <p>
                        <?php echo $article["text"] ?>
                    </p>
                    <div class="article_autor">
                        <p><?php echo $fio ?></p>
                    </div>
                    <div class="article_btn">
                        <a href="">
                            <a href="../profile/auth.php">
                                <div class="btn">
                                    КУПИТЬ БИЛЕТ
                                </div>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>