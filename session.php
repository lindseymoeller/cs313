<?php

if (!isset($_SESSION)) {
    session_start();
}

function login($user) {
    if (array_key_exists('user_id', $user) && $user['user_id']) {
        $_SESSION['user_id'] = $user['user_id'];
    }
}

function isLoggedIn() {
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] == true;
}

function logout() {
     $_SESSION = array();
     session_destroy();
}
