<?php

require_once './helpers.php';
require_once './mocks/data.php';
require_once './functions/index.php';

$main_header = include_template('./layout/_main-header.php', [
    'user_name' => $user_name,
    'title' => $title,
    'is_auth' => $is_auth,
]);

$page_content = include_template('main.php', [
    'categories' => $categories,
    'lots' => $lots,
]);

$main_footer = include_template('_main-footer.php', [
    'categories' => $categories,
]);

$layout_content = include_template('./layout/layout.php', [
    'main_header' => $main_header,
    'page_content' => $page_content,
    'main_footer' => $main_footer,
    'categories' => $categories,
]);

print($layout_content);
