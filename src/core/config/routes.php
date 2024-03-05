<?php

return [
    '/login' => function () {
        include_once APP_PATH . '/src/client/pages/login.php';
    },
    '/' => function () {
        include_once APP_PATH . '/src/client/pages/home.php';
    }
];
