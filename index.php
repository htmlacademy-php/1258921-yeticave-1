<?php

declare(strict_types=1);

require_once './functions/helpers.php';
require_once './mocks/data.php';
require_once './functions/index.php';
require_once './functions/consts.php';

date_default_timezone_set('Europe/Moscow');


$page_content = include_template('main.php', [
    'categories' => $categories,
    'lots' => $lots,
]);

$layout_content = include_template('./layout/main.php', [
    'page_content' => $page_content,
    'categories' => $categories,
    'user_name' => $user_name,
    'title' => $title,
    'is_auth' => $is_auth,
]);

print($layout_content);
