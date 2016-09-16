<?php

$app['database']->insert('users', [
    'name' => $_POST['name']
]);

header('Location: /');