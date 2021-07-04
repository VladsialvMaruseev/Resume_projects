<?php

include '../php/database.php';
$actors = get_actors();

foreach ($actors as $actor) : ?>

<?php $img = get_imgs_by_id($actor["id_img"]); ?>

    <!-- Блок с актерами -->
    <div>
        <div class="actor">
            <div class="actor_photo">
                <a href=""><img src="<?php echo $img ?>"></a>
            </div>
            <div class="actor_name">
                <a href="../php/biography.php">
                    <p>
                        <?php echo $actor["fio"] ?>
                    </p>
                </a>
            </div>
        </div>
    </div>

    <!-- Блок с актерами -->

<?php endforeach; ?>