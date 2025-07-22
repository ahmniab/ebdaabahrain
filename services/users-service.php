<?php
require_once 'users.php';

function isUserValid($username, $password) {
    global $users;
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}
