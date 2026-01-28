<?php
return [
    'GET /login' => ['LoginController', 'loginPage'],
    'GET /register' => ['LoginController', 'registerPage'],
    'POST /register' => ['LoginController', 'registerNewUser']
];