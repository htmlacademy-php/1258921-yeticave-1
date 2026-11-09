<?php

declare(strict_types=1);

/**
 * @var string $user_name
 * @var string $title
 * @var string $is_auth
 * @var string $main_header
 * @var string $page_content
 * @var string $main_footer
 * @var string[] $categories
 */

$main_header = include_template('./layout/_main-header.php', [
    'user_name' => $user_name,
    'title' => $title,
    'is_auth' => $is_auth,
]);

$main_footer = include_template('./layout/_main-footer.php', [
    'categories' => $categories,
]);
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="../../front/css/normalize.min.css" rel="stylesheet">
    <link href="../../front/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper">

        <?= $main_header ?>

        <main class="container">
            <?= $page_content ?>
        </main>
    </div>

    <?= $main_footer ?>

    <script src="../../front/flatpickr.js"></script>
    <script src="../../front/script.js"></script>
</body>

</html>
