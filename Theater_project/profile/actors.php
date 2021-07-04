<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="../style/admin_panel.css">
    <link rel="stylesheet" href="../style/normalyze.css">
    <link rel="stylesheet" href="../js/main.js">
    <link rel="stylesheet" href="../js/jQery.js">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Админ панель</title>
</head>

<body class="admin_panel">
    <div class="container">
        <?php require '../templates_admin/tmp_header.php'; ?>
        <section class="content">
            <?php require '../templates_admin/tmp_actors.php'; ?>
        </section>
    </div>
</body>

</html>